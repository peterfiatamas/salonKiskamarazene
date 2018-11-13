$(document).ready(function () {
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
