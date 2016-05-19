$(function() {
    var pull 		= $('#pull');
        menu 		= $('nav ul');
        menuHeight	= menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });

    $(window).resize(function(){
        var w = $(window).width();
        if(w > 320 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
    $('#contact').click(function () {
        $('#location').css("pointer-events", "auto");
    });
    $('a[href^="#"]').on('click', function(event) {

        var target = $( $(this).attr('href') );

        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);
        }

    });
});