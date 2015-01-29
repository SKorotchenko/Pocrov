/**
 * Created by Sofia on 30.11.2014.
 */
$(function(){
    //ПЛАЖКА ГАЛЕРЕИ
    $('.gallery-in-nav').hover(function(){
        if ($(this).hasClass('slided')){
            stopPropagation();
        }
        $(".gallery-links").slideDown('normal');
        $(this).addClass('slided');
    });

    /*$('nav a').not('.gallery-in-nav').hover(function(){
        $(".gallery-links").slideUp('normal');
        setTimeout(function(){
            $('.gallery-in-nav').removeClass('slided');
        },200);
    });*/

    $(".gallery-links").on('mouseleave', function(){
        $(".gallery-links").slideUp('normal');
        setTimeout(function(){
            $('.gallery-in-nav').removeClass('slided');
        },500);
    });

   /* if ($('body section article').hasClass('services')){
        $('body').css({
            'background-image': 'url("images/Services_Background.jpg")',
            'background-repeat': 'no-repeat',
            'background-size': '100% 100%'
        });
    }

    if ($('body section article').hasClass('technology')){
        $('body').css({
            'background-image': 'url("images/Technology_Background.jpg")',
            'background-repeat': 'no-repeat',
            'background-size': '100% 100%'
        });
    }*/

    $('.wrapper').baseGallery({
        nextButton: '.bgNextButton',
        backButton: '.bgBackButton',
        useTransition: true,
        cycle: true,
        auto: 4000,
        duration: 1200
    });

    //change language
    $('ul.lang li a').on('click', function(){
        var id = $(this).attr('id');
        if (id == 'ru'){
            document.cookie = "lang=ru";
        } else if (id == 'en'){
            document.cookie = "lang=en";
        } else if (id == 'ua'){
            document.cookie = "lang=ua";
        }
    })

    if($('body').width() <= 1920){
        $('form textarea').attr('maxlength', '620');
    }
    if($('body').width() <= 1680){
        $('form textarea').attr('maxlength', '580');
    }
    if($('body').width() <= 1600){
        $('form textarea').attr('maxlength', '650');
    }
    if($('body').width() <= 1536){
        $('form textarea').attr('maxlength', '620');
    }
    if($('body').width() <= 1366){
        $('form textarea').attr('maxlength', '600');
    }
    if($('body').width() <= 1280){
        $('form textarea').attr('maxlength', '560');
    }
    if($('body').width() <= 1152){
        $('form textarea').attr('maxlength', '500');
    }
    if($('body').width() <= 1024){
        $('form textarea').attr('maxlength', '410');
    }
});
