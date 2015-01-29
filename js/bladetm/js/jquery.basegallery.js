 /* ============================================================
 * jquery.basegallery.js v1.26 [development]
 * =============================================================
 * для создание галлереи нужно все изображения разместить внутри одного тега, например с классом "wrapper" (можно использовать любой другой селектор).
 * размеры контейнера, внутри которого находятся картинки, должны быть определены явно! (в любых единицах измерения)
 * например:
 * <div class="wrapper">
 *    <img src="1.jpg" alt="image 1">
 *    <img src="2.jpg" alt="image 2">
 *    <img src="3.jpg" alt="image 3">
 * </div>
 * далее нужно инициализировать плагин, вызвав метод baseGallery этого елемента. Например так:
 * $('.wrapper').baseGallery({
 *   nextButton: '.nav .next',
 *   backButton: '.nav .back'
 * });
 * количество параметров может быть любым
 * 
 * принимаемые параметры:
 * 1.  tag: 'img'
 *     определяет какие елементы будут анимироваться в слайд-шоу
 *     принимает строку-селектор
 * 2.  auto: false
 *     включает автоматическую смену слайдов
 *     принимает число в милисекундах (длительность задержки) ИЛИ
 *     false - опция ВЫКЛЮЧЕНА
 * 3.  duration: 400
 *     длительность анимации
 *     принимает число в милисекундах
 * 4.  cycle: false
 *     определяет, зацикливать ли слайд-шоу, или нет. Если слайд-шоу зациклено - при слайде в самый конец, после последнего элемента будет следовать первый
 *     true - вкл., false - выкл.
 * 5.  showLinks: false
 *     отображать ли точки-ссылки на каждый слайд. По клике на такой ссылке, слайд-шоу переключится на изображение, привязанное к этой ссылке
 *     true - да, false - нет
 * 6.  linksContainer: false
 *     если showLinks: true - ссылки будут созданы внутри контейнера, строку-селектор которого вы укажите
 *     принимает строку-селектор
 * 7.  nextButton: false
 *     укажите селектор елемента, кликнув по которому, должен отобразится следующий слайд
 *     принимает строку-селектор ИЛИ
 *     true - создает кнопку автоматичски
 *     false - кнопка отсутствует
 * 8.  backButton: false
 *     укажите селектор елемента, кликнув по которому, должен отобразится предыдущий слайд
 *     принимает строку-селектор ИЛИ
 *     true - создает кнопку автоматичски
 *     false - кнопка отсутствует
 * каждый из вышеописанных параметров не является обязательным
 * значение после символа ":" является значением по-умолчанию
 * 
 * Новое:
 * - Добавлен новый параметр auto
 * - Изображение-стрелочки теперь вшито в CSS, ее не нужно где-то хранить
 * - При cycle: true слайд-шоу зацикливается а не перематывается на начало (работает как при false, если слайдов < 3)
 * - Теперь можно реализовывать слайдшоу внутри слайдшоу
 * - Временно убиты некоторые параметры (в будущих версиях я их еще верну)
 * 
 * by Kolesnicheno Igor [13th]
 * 18/11/2014
 * ===========================================================*/



var count = 0,
	sliders = [],
	slideIntervals = [];

(function($, undefined){
	/*var count = 0,
		sliders = [],
		slideIntervals = [];*/
	// инициализация
	$.fn.filterByData = function(prop, val) {
		return this.filter(
			function() { return $(this).data(prop)==val; }
		);
	}
	$.fn.baseGallery = function(opt){
		var obj = this,
			bgOpt = {};
		for(i=0; i<obj.length; i++){
			// создаем объект галереи
			opt = opt || {};
			sliders[count] = new baseGalleryObj(opt);
			bgOpt = sliders[count].options;
			bgOpt = bgInitCorrect(obj.eq(i), bgOpt);

			// формирование слайд-шоу
			bgCreate(obj.eq(i), bgOpt);
			bgOpt.nextButton = (typeof bgOpt.nextButton != 'boolean') ? bgOpt.nextButton : '.bgNextButton' + bgOpt.bgID;
			bgOpt.backButton = (typeof bgOpt.backButton != 'boolean') ? bgOpt.backButton : '.bgBackButton' + bgOpt.bgID;
			bgCreateLinks(obj.eq(i), bgOpt);

			// привязываем сдвиг на ссылки изображений
			$('.bgMovCont' + count + ' li').on('click', function(){
				var number = $(this).data('number'),
					id = $(this).parent().data('id');
				sliders[id].move(number, this);
			})

			// привязываем сдвиг на кнопку след. изображение
			if(bgOpt.nextButton){
				$(bgOpt.nextButton).on('click',function(){
					if($(this).hasClass('bgDisable'))
						return false;
					var id = $(this).data('id')*1,
						index = $('.bgMovCont' + id + ' .active').index('.bgMovCont' + id + ' li') + 1;
					if(index == sliders[id].options.length)
						index = 0;
					$('.bgMovCont' + id + ' li').eq(index).click();
				});
			}

			// привязываем сдвиг на кнопку пред. изображение
			if(bgOpt.backButton){
				$(bgOpt.backButton).on('click',function(){
					if($(this).hasClass('bgDisable'))
						return false;
					var id = $(this).data('id')*1,
						index = $('.bgMovCont' + id + ' .active').index('.bgMovCont' + id + ' li') - 1;
					$('.bgMovCont' + id + ' li').eq(index).click();
				});
			}

			// запуск автопереключения
			if(typeof bgOpt.auto == 'number'){
				sliders[count].startSlideShow();
			}

			// следующее созданное слайд-шоу не перезапишет текущее
			count++;
		}

		return this;
	}


	/*
	класс слайд-шоу
	*/
	function baseGalleryObj(opt){
		// сохраняем опции для каждого объекта галереи
		this.options = {};
		for(key in opt)
			this.options[key] = opt[key];
		this.animating = false;
		// сдвиг
		this.move = function(number, obj){
			var opt = this.options;
			if(opt.animating  &&  opt.cycle)
				return false;
			opt.animating = true;
			$('.bgMovCont' + opt.bgID + ' li.active').removeClass('active');
			$(obj).addClass('active');
			if(opt.cycle)
				number = slideMove(this.options, number);
			this.buttonManagment();
			opt.right = number*opt.width;
			$('.bgMover' + opt.bgID).animate({
				right: opt.right + 'px'
			}, opt.duration, function(){
				opt.animating = false;
			});
		}
		// Управление кнопками навигации
		this.buttonManagment = function(){
			var opt = this.options;
			if(!opt.cycle){
				var activeli = $('.bgMovCont' + opt.bgID + ' li.active').get(0),
					fli		 = $('.bgMovCont' + opt.bgID + ' li:first-child').get(0),
					lli		 = $('.bgMovCont' + opt.bgID + ' li:last-child').get(0);

				// восстанавливаем навигацию
				$(opt.backButton).removeClass('bgDisable');
				$(opt.nextButton).removeClass('bgDisable');

				// блокируем навигацию
				if(activeli == lli)
					$(opt.nextButton).addClass('bgDisable');
				if(activeli == fli)
					$(opt.backButton).addClass('bgDisable');
			}
		}
		// автоматическое переключение слайдов
		this.startSlideShow = function(){
			(function(opt){
				slideIntervals[opt.bgID] = setInterval(function(){
					var index = $('.bgMovCont' + opt.bgID + ' .active').index('.bgMovCont' + opt.bgID + ' li') + 1;
					if(index == sliders[opt.bgID].options.length)
						index = 0;
					$('.bgMovCont' + opt.bgID + ' li').eq(index).click();
				},opt.auto);
			})(this.options)
		}
	}


	/*
	функция-мувер фотографий
	*/
	function slideMove(opt, number){
		var id = opt.bgID;
		if(number == opt.length-1) {
			$('.bgMover' + id).append($('.bgMover' + id + ' li').eq(0));
			for(i=0; i<opt.length; i++){
				var elm = $('.bgMovCont' + id + ' li').get(i);
				$(elm).data('number', + $(elm).data('number') - 1);
			}
			$('.bgMovCont' + id + ' li').filterByData('number','-1').data('number', $('.bgMovCont' + id + ' li').length-1);
			opt.right -= opt.width;
			$('.bgMover' + id).css('right', opt.right);
			return number-1;
		}
		if(number == 0) {
			$('.bgMover' + id).prepend($('.bgMover' + id + ' li').eq(length-1));
			for(i=0; i<opt.length; i++){
				var elm = $('.bgMovCont' + id + ' li').get(i);
				$(elm).data('number', + $(elm).data('number') + 1);
			}
			$('.bgMovCont' + id + ' li').filterByData('number',opt.length).data('number', 0);
			opt.right += opt.width;
			$('.bgMover' + id).css('right', opt.right);
			return number+1;
		}
		return number;
	}


	/*
	перерасчет размеров и позиции при ресайзе окна
	*/
	$(window).on('resize',function(){
		for(var i=0; i<sliders.length; i++){
			var opt = sliders[i].options,
				pos = $('.bgMovCont' + opt.bgID + ' li.active').data('number');
			// пересчитываем позицию слайдов при ресайзе окна
			opt.width = opt.base.width();
			opt.right = pos*opt.width;
			$('.bgMover' + opt.bgID).css('right', opt.right);
		}
	})


	/*
	проверка параметров
	очередность НЕ менять
	*/
	function bgInitCorrect(obj, opt){
		opt.base = obj;
		opt.bgID = count;
		opt.width = $(obj).width();
		opt.auto = (typeof opt.auto != 'number') ? false : opt.auto;
		opt.tag = (typeof opt.tag == 'string') ? opt.tag : 'img';
		opt.length = $(obj).children(opt.tag).length;
		opt.cycle = (opt.length >= 3) ? opt.cycle : false;
		opt.right = (opt.cycle) ? opt.width : 0;
		opt.duration = (opt.duration) ? opt.duration : 400;
		return opt;
	}


	/*
	формирование слайд-шоу
	оключить кнопку назад при старте
	блокировать слайдинг, если у нас меньше 2 анимированных элементов
	*/
	function bgCreate(obj, opt){
		$(obj).addClass('baseGallery');
		$(obj).children(opt.tag).wrapAll('<ul class="bgMover' + opt.bgID + '"></ul>');
		$(obj).find('.bgMover' + opt.bgID).children(opt.tag).wrap('<li></li>');
		if(opt.nextButton)
			$(opt.nextButton).data('id', opt.bgID).addClass('bgUserNextButton');
		if(opt.backButton)
			$(opt.backButton).data('id', opt.bgID).addClass('bgUserBackButton');

		// cycle == true
		if(opt.cycle){
			var lastItem = $('.bgMover' + opt.bgID + ' li:last-child').get(0);
			$('.bgMover' + opt.bgID).prepend(lastItem).css('right', opt.width);
		}

		// блокировки
		if(!opt.cycle  &&  opt.backButton)
			$(opt.backButton).addClass('bgDisable');
		if(opt.length < 2){
			if(opt.nextButton){
				$(opt.nextButton).addClass('bgDisable');
				opt.nextButton = null;
			}
			if(opt.backButton){
				$(opt.backButton).addClass('bgDisable');
				opt.backButton = null;
			}
		}
	}


	/*
	генерация ссылок
	привязка кнопок к галлереям
	*/
	function bgCreateLinks(obj, opt){
		if(opt.showLinks && opt.linksContainer)
			$(opt.linksContainer).append('<ul class="bgControls bgMovCont' + opt.bgID + '" data-id="' + opt.bgID + '"></ul>');
		else
			$(obj).find('.bgMover' + opt.bgID).after('<ul class="bgControls bgMovCont' + opt.bgID + '" data-id="' + opt.bgID + '"></ul>');

		if(!opt.cycle){
			var str='<li class="active" data-number="0"></li>';
			for(var i=1; i<opt.length;i++)
				str+='<li data-number="' + i + '"></li>';
		} else {
			var str='<li class="active" data-number="1"></li>';
			for(var i=2; i<opt.length;i++)
				str+='<li data-number="' + i + '"></li>';
			str+='<li data-number="0"></li>';
		}
		$('.bgMovCont' + opt.bgID).append(str);
		if(!opt.showLinks)
			$('.bgMovCont' + opt.bgID).css('visibility','hidden');
	}
})(jQuery);