 /* ==========================================================
 * jquery.basegallery.js v1.2
 * ===========================================================
 * для создание слайд-шоу нужно все изображения разместить внутри одного тега, например с классом "wrapper" (можно использовать любой другой селектор), например
 * <div class="wrapper">
 *   <img src="1.jpg" alt="1">
 *   <img src="1.jpg" alt="1">
 *   <img src="1.jpg" alt="1">
 * </div>
 * и инициализировать плагин, вызвав метод cGallery этого елемента. Например так:
 * $('.wrapper').cGallery({
 *   nextButton: '.nav .next',
 *   backButton: '.nav .back'
 * });
 * СОВЕТ: размеры для контейнера, вмещающего картинки, должны быть определены явно! (ошибки может и не быть, зависит от верстки)
 * 
 * принимаемые параметры:
 * 1. tag: 'img'
 *    определяет какие елементы будут анимироваться в слайд-шоу
 *    принимает строку-селектор
 * 2. duration: 400
 *    длительность анимирования
 *    принимает число в милисекундах
 * 3. vertical: false
 *    устанавливает направление движения слайдов
 *    false - слайды двигаются слева вправо
 *    true - слайды двигаются сверху вниз
 * 4. useTransition: false
 *    использовать ли в анимации css-свойство transition? если не знаете о чем речь, ставьте false
 *    true - использует transition, false - использует метод animate jQuery
 * 5. cycle: false
 *    определяет, зацикливать ли слайд-шоу, или нет. Если слайд-шоу зациклено - при слайде в самый конец, после последнего элемента будет следовать первый
 *    true - вкл., false - выкл.
 * 6. auto: false
 *    переключать слайды автоматически?
 *    true - да, false - нет
 * 7. autoDelay: 5000
 *    если auto: true - устанавливает время, на протяжении которого будет показан 1 слайд
 *    принимает любое число в милисекундах
 * 8. showLinks: false
 *    отображать ли точки-ссылки на каждый слайд. По клике на такой ссылке, слайд-шоу переключится на изображение, привязанное к этой ссылке
 *    true - да, false - нет
 * 9. linksContainer: false
 *    если showLinks: true - ссылки будут созданы внутри контейнера, строку-селектор которого вы укажите
 *    принимает строку-селектор
 * 10. nextButton: false
 *    укажите елемент, кликнув по которому, должен отобразится следующий слайд
 *    принимает строку-селектор
 * 11. backButton: false
 *     укажите елемент, кликнув по которому, должен отобразится предыдущий слайд
 *     принимает строку-селектор
 * каждый из вышеописанных параметров не является обязательным
 * значение посли символа ":" является значением по-умолчанию
 * 
 * by 13th
 * 30/08/2014
 * ===========================================================*/
 
(function(){
	var count = 0,
		sliders = [],
		slideIntervals = [];
	// инициализация
	$.fn.baseGallery = function(opt){
		opt = opt || {};
		opt.base = this;
		opt.count = count;
		if(!opt.tag)
			opt.tag = 'img';
		opt = cgInitCorrect(this, opt);
		// оборачиваем фото необходимыми тегами
		cgCreate(this, opt);
		// создаем ссылки на изображения
		cgCreateLinks(this, opt);
		// создаем объект галереи
		sliders[count] = new baseGalleryObj(opt);
		// привязываем сдвиг на ссылки изображений
		$('#movCont' + count + ' li').on('click', function(){
			var number = $(this).data('number'),
				id = $(this).parent().data('id');
			sliders[id].move(number, this);
		})
		// привязываем сдвиг на кнопку след. изображение
		if(opt.nextButton){
			$(opt.nextButton).data('id', count);
			$(opt.nextButton).on('click',function(){
				if($(this).hasClass('bgDisable'))
					return false;
				var id = $(this).data('id')*1,
					number = $('#movCont' + id + ' li.active').data('number') + 1;
				$('#movCont' + id + ' li').eq(number).click();
			});
		}
		// привязываем сдвиг на кнопку пред. изображение
		if(opt.backButton){
			if(!opt.cycle)
				$(opt.backButton).addClass('bgDisable');
			$(opt.backButton).data('id', count);
			$(opt.backButton).on('click',function(){
				if($(this).hasClass('bgDisable'))
					return false;
				var id = $(this).data('id')*1,
					number = $('#movCont' + id + ' li.active').data('number') - 1;
				$('#movCont' + id + ' li').eq(number).click();
			});
		}
		// автосладинг
		if(opt.auto)
			sliders[count].startAutoSlide();
		// следующее созданное слайд-шоу не перезапишет текущее
		count++;
		// возвращаем сами себя, это ж jQuery =)
		return this;
	}
	
	
	
	function baseGalleryObj(opt){
		// сохраняем опции для каждого объекта галереи
		this.base = opt.base;
		this.galleryNumber = opt.count;
		this.right = 0;
		this.bottom = 0;
		this.width = $(this.base).width();
		this.height = $(this.base).height();
		if(opt.vertical)
			this.len = $('#mover' + this.galleryNumber + ' li').length*this.height;
		else
			this.len = $('#mover' + this.galleryNumber + ' li').length*this.width;
		this.nextButton = opt.nextButton;
		this.backButton = opt.backButton;
		this.cycle = opt.cycle;
		this.auto = opt.auto;
		this.autoDelay = opt.autoDelay;
		this.useTransition = opt.useTransition;
		this.duration = opt.duration;
		this.vertical = opt.vertical;
		// сдвиг
		this.move = function(number, obj){
			var direction;
			$(this.backButton).removeClass('bgDisable');
			$(this.nextButton).removeClass('bgDisable');
			$('#movCont' + this.galleryNumber + ' li.active').removeClass('active');
			$(obj).addClass('active');
			if(this.vertical){ // венртикальное направление
				this.bottom = number*this.height;
				this.moveCorrect(1);
				if(this.useTransition)
					$('#mover' + this.galleryNumber).css('bottom', this.bottom + 'px');
				else
					$('#mover' + this.galleryNumber).animate({'bottom': this.bottom + 'px'}, this.duration);
			} else { // горизонтальное направление
				this.right = number*this.width;
				this.moveCorrect(0);
				if(this.useTransition)
					$('#mover' + this.galleryNumber).css('right', this.right + 'px');
				else
					$('#mover' + this.galleryNumber).animate({'right': this.right + 'px'}, this.duration);
			}
		}
		// коррекция сдвига
		this.moveCorrect = function(direction){
			if(direction == 0) // горизонтальное направдение
				if(!this.cycle){
					if(this.right + this.width == this.len  &&  this.nextButton)
						$(this.nextButton).addClass('bgDisable');
					if(this.right == 0  &&  this.backButton)
						$(this.backButton).addClass('bgDisable');
				} else {
					if(this.right < 0)
						this.right = this.len - this.width;
					if(this.right == this.len)
						this.right = 0;
				}
			else // вертикальное направление
				if(!this.cycle){
					if(this.bottom + this.height == this.len  &&  this.nextButton)
						$(this.nextButton).addClass('bgDisable');
					if(this.bottom == 0  &&  this.backButton)
						$(this.backButton).addClass('bgDisable');
				} else {
					if(this.bottom < 0)
						this.bottom = this.len - this.height;
					if(this.bottom == this.len)
						this.bottom = 0;
				}
				
		}
		// автоматическое переключение слайдов
		this.startAutoSlide = function(){
			if(!this.autoDelay)
				this.autoDelay = 5000;
			var str="slideIntervals[" + this.galleryNumber + "] = setInterval(function(){";
			str+="var number = $('#movCont" + this.galleryNumber + " li.active').data('number') + 1;";
			str+="if(number == $('#movCont" + this.galleryNumber + " li').length) number = 0;";
			str+="$('#movCont" + this.galleryNumber + " li').eq(number).click();";
			str+="}," + this.autoDelay + ");";
			eval(str);
		}
	}
	
	
	// блокировать слайдинг, если у нас 1 или меньше анимированный елемент
	function cgInitCorrect(obj, opt){
		if($(obj).find(opt.tag).length < 2){
			if(opt.nextButton){
				$(opt.nextButton).addClass('bgDisable');
				opt.nextButton = null;
			}
			if(opt.backButton){
				$(opt.backButton).addClass('bgDisable');
				opt.backButton = null;
			}
		}
		return opt;
	}
	// формирование слайд-шоу
	function cgCreate(obj, opt){
		$(obj).addClass('baseGallery');
		if(opt.vertical)
			$(obj).addClass('bgVertical');
		$(obj).find(opt.tag).wrap('<li></li>');
		$(obj).find('li').wrapAll('<ul id="mover' + opt.count + '"></ul>');
		if(opt.useTransition){
			if(!opt.duration)
				opt.duration = 400;
			$(obj).find('ul').css({
				'-webkit-transition': 'all ' + opt.duration + 'ms',
				'-moz-transition': 'all ' + opt.duration + 'ms',
				'-o-transition': 'all ' + opt.duration + 'ms',
				'transition': 'all ' + opt.duration + 'ms'
			})
		}
	}
	// генерация ссылок
	function cgCreateLinks(obj, opt){
		if(opt.showLinks && opt.linksContainer)
			$(opt.linksContainer).append('<ul class="bgControls" id="movCont' + count + '" data-id="' + count + '"></ul>');
		else
			$(obj).find('#mover' + opt.count).after('<ul class="bgControls" id="movCont' + count + '" data-id="' + count + '"></ul>');
		var str='<li class="active" data-number="0"></li>';
		for(i=1;i<$(obj).find('li').length;i++)
			str+='<li data-number="' + i + '"></li>';
		$('#movCont' + count).append(str);
		if(!opt.showLinks)
			$('#movCont' + count).css('visibility','hidden');
	}
})();






