$(window).load(function(){
    var $skills = $('.skills');
    var $skillsParent = $('#skills');
    var skills = new Waypoint.Inview({
        element: $skills[0],
        enter: function() {
            $skills.removeClass('empty');
            $skillsParent.find("h1").removeClass('fadeOut');
            $skillsParent.find("img").removeClass('fadeOut');
            $skillsParent.find("h5").removeClass('fadeOut');
        },
        exited: function() {
            $skills.addClass('empty');
            $skillsParent.find("h1").addClass('fadeOut');
            $skillsParent.find("img").addClass('fadeOut');
            $skillsParent.find("h5").addClass('fadeOut');
        }
    });
    var $about = $('#about');
    var about = new Waypoint.Inview({
        element: $about[0],
        enter: function() {
            $about.removeClass('fadeOut');
        },
        exited: function() {
            $about.addClass('fadeOut');
        }
    });

})

$(function() {

    /* navigation */
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

    $('a[href^="#"]').on('click', function(event) {

        var target = $( $(this).attr('href') );

        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 40
            }, 1000);
        }
    });

    /* google maps CONTACT */
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
});