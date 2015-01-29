// JavaScript Document

$(window).on('load',function(){
	if($('.slideShow').get(0))
		$('.slideShow').baseGallery({		// размеры элементы должны быть указаны явно
			tag: 'a',						// укажите селектор элементов, которые будут слайдиться (по умолчанию 'img' или false)
			duration: 400,					// длительность анимации (мс) (по умолчанию 400)
			vertical: false,				// направление слайд-шоу
			useTransition: false,			// true - использовать CSS-Transition (по умолчанию false)
			cycle: false,					// включает/выключает зацикливание слайдшоу (по умолчанию false)
			auto: true,						// включает/отключает автоматическую смену слайдов (по умолчанию false)
			autoDelay: 5000,				// длительность отбражения слайда (мс), если autoPlay: true (по умолчанию 5000)
			showLinks: false,				// показывать (true)/скрывать (false) ссылки на изображения (по умолчанию false)
			linksContainer: false,			// контейнер в котором размещать ссылки, если showLinks: true (по умолчанию false)
			nextButton: false,				// селектор кнопки, по нажатию на которую будет показан следующий слайд (по умолчанию false)
			backButton: false				// селектор кнопки, по нажатию на которую будет показан предыдущий слайд (по умолчанию false)
		});
})



window.showedNews = 10;
window.newsShowing = false;

$(document).ready(function(){
	if($('.gallery_list').get(0))
		$('.gallery_list').baseGallery({	// размеры элементы должны быть указаны явно
			tag: 'img',						// укажите селектор элементов, которые будут слайдиться (по умолчанию 'img' или false)
			duration: 400,					// длительность анимации (мс) (по умолчанию 400)
			vertical: false,				// направление слайд-шоу
			useTransition: false,			// true - использовать CSS-Transition (по умолчанию false)
			cycle: false,					// включает/выключает зацикливание слайдшоу (по умолчанию false)
			auto: false,					// включает/отключает автоматическую смену слайдов (по умолчанию false)
			autoDelay: 3000,				// длительность отбражения слайда (мс), если autoPlay: true (по умолчанию 5000)
			showLinks: false,				// показывать (true)/скрывать (false) ссылки на изображения (по умолчанию false)
			linksContainer: false,			// контейнер в котором размещать ссылки, если showLinks: true (по умолчанию false)
			nextButton: '.nextSlide',		// селектор кнопки, по нажатию на которую будет показан следующий слайд (по умолчанию false)
			backButton: '.prevSlide'		// селектор кнопки, по нажатию на которую будет показан предыдущий слайд (по умолчанию false)
		});

	$(document).on('click', '.about .menu li', function(){
		var id = $(this).data('id');
		$('.about .menu .active').removeClass('active');
		$('.about .blocks .show').removeClass('show');
		$('.about .blocks #' + id).addClass('show');
		$(this).addClass('active');
	})
	$(document).on('click','.allImgsInGallery li',function(e){
		var num = $(e.currentTarget).data('number');
		$(document.body, document.documentElement).animate({
			scrollTop: 0
		},400,function(){
			$(document.body, document.documentElement).css('overflow','hidden');
			$('.bgControls li[data-number="' + num + '"]').click();
			$('.popupBack').addClass('show');
		});
	})
	$(document).on('click','.imgPopupClose',function(e){
		$(e.currentTarget).parents('.popupBack').removeClass('show');
		$(document.body, document.documentElement).css('overflow','');
	})
	$(document).on('click','.moreBttn',function(){
		var newsCount = 10;

		if(window.newsShowing)
			return false;
		window.newsShowing = true;
		$.ajax({
			type: "POST",
			url: "php/loadMoreNews.php",
			data: {
				showed: window.showedNews,
				get: newsCount
			},
			success: function(res){
				var $newList = $();
				res = JSON.parse(res);
				for(i=0; i<res[0].length; i++) {
					var $item = $('<li></li>').append('<div class="newsImgBlock"></div><div class="newsBody"></div>');
					$item.find('.newsImgBlock').append('<a href="?page=newspage&id=' + res[0][i][0] + '"></a>');
					$item.find('a').append('<img src="' + res[0][i][1] + '" alt="' + res[0][i][2] + '">');
					$item.find('.newsBody').append('<div class="newsName"><a href="?page=newspage&id=' + res[0][i][0] + '">' + res[0][i][2] + '</a></div>');
					$item.find('.newsBody').append('<div class="newsDate">' + res[0][i][3] + '</div>');
					$item.find('.newsBody').append('<div class="newsContent">' + res[0][i][4] + '</div>');
					$newList = $newList.add($item.get(0));
				}
				$('.newsList .moreBttn').before($newList);
				window.showedNews = $('.newsList .list li').length;
				if(+res[1] <= window.showedNews)
					$('.moreBttn').remove();
				window.newsShowing = false;
			}
		});
	})
	$(document).on('click','#flashStart',function(){
		$(document.body, document.documentElement).css('overflow','hidden');
		$('.popupBack').addClass('show');
	})
	$(document).on('click','.swfPopupClose', function(){
		$(document.body, document.documentElement).css('overflow','');
		$('.popupBack').removeClass('show');
	})
});
function renderFlash(file){
	var flashvars = {},
		params = {
			quality: "high",
			bgcolor: "#ffffff",
			allowscriptaccess: "sameDomain",
			allowfullscreen: "true",
			base: "."
		},
		attributes = {
			id: "obj",
			name: "obj",
			align: "middle"
		},
		hoverImg;
	swfobject.embedSWF(
		"flash/" + file,
		"flashContent",
		"640",
		"479",
		"9.0.0",
		"expressInstall.swf",
		flashvars,
		params,
		attributes
	);
	hoverImg = new Image();
	hoverImg.src = 'imgs/3Dh.png';
	document.write('<p id="flashStart" data-href="' + file + '"></p>');
}