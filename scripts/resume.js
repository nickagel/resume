$(window).on('load', function() {
    $('head style[type="text/css"]').attr('type', 'text/less');
    less.refreshStyles();
    window.randomize = function() {
        $('.html-css').attr('data-progress', Math.floor(90));
        $('.mysql-mongdb').attr('data-progress', Math.floor(85));
        $('.aspnet-c').attr('data-progress', Math.floor(80));
        $('.php').attr('data-progress', Math.floor(90));
        $('.python').attr('data-progress', Math.floor(75));
        $('.testing').attr('data-progress', Math.floor(80));
        $('.express-nodejs').attr('data-progress', Math.floor(85));
        $('.java').attr('data-progress', Math.floor(70));
    }
    setTimeout(window.randomize, 200);
    $('.radial-progress').click(window.randomize);
})
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