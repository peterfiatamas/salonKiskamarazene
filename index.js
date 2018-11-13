$(document).ready(function () {
    var timeout
            , current = 0
            , container = $('.slideshow')
            , slides = container.find('.slide-picture');

    function start() {
        timeout = window.setTimeout(showNext, 4000);
    }

    function showNext() {
        slides.eq(current).removeClass('active');
        current += 1;
        if (current >= slides.length) {
            current = 0;
        }
        slides.eq(current).addClass('active');
        start();
    }
    container.mouseenter(function () {
        clearTimeout(timeout);
    }).mouseleave(function () {
        start();
    });
    start();
    $('.gomb').on('click', fel);

    function fel() {
        var szoveg = $('.text-hidden');
        if ((szoveg).is(':hidden')) {
            $('.text-hidden').css("display", "block");
            $('.gomb').css("margin-bottom", 20);
            $('.gomb').html('Kevesebb');
        } else {
            $('.text-hidden').css("display", "none");
            $('.gomb').html('Több ');
        }

    }
    
});
