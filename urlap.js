$(document).ready(function () {
    $('#kuldgomb').on('click', ellenorzes);
    //Űrlap
    function ellenorzes() {
        var inputok = $('.reg input:text, textarea.mezo');
        var nincshiba = true;
        for (var i = 0; i < inputok.length; i++) {
            if ($(inputok[i]).val().trim() == '') {
                nincshiba = false;
                if (!$(inputok[i]).hasClass('hiba')) {
                    $(inputok[i]).addClass('hiba');
                    $(inputok[i]).before('<div style="color:red;" id="uzi_' + i + '">*</div>');
                }
            } else {
                $(inputok[i]).removeClass('hiba');
                $('#uzi_' + i).remove();

            }
        }
        if (!nincshiba) {
            $('#hibus').html('Minden mezőt ki kell tölteni!');
        } else {
            $('#hibus').html('');
        }
        return nincshiba;
    }


});
