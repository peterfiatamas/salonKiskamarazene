
$(document).ready(function () {
    $('.look').on('click', nez);
    
    function nez() {
        var titok = $('.secret');
        gtag('event', 'click', {
            'event_category': 'felfedes',
            'event_label': 'email'
        });
        if ((titok).is(':hidden')) {
            $('.secret').css("display", "block");
            $('.look').css("display", "none");
            $('.email').css("display", "none");
        }
    }
});