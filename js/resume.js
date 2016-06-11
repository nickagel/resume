$(window).load(function(){
var $elem = $('.skills');
var in_view = new Waypoint.Inview({
        element: $elem[0],
        enter: function() {
            $elem.removeClass('empty');
        },
        // exit: function() { // optionally
        //     $elem.addClass('empty');
        // }
    });
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

    $('#map').addClass('scrolloff');      
    
    $('#overlay').on("mouseup",function(){        
        $('#map').addClass('scrolloff'); 
    });
    
    $('#overlay').on("mousedown",function(){        
        $('#map').removeClass('scrolloff');
    });

    $("#map").mouseleave(function () {            
        $('#map').addClass('scrolloff');            
    });
        
    $('a[href^="#"]').on('click', function(event) {

        var target = $( $(this).attr('href') );

        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 40
            }, 1000);
        }
    });
});