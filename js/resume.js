$(window).load(function(){
    var $loader = $("#loading");
    var $html = $('html');
    var $skills = $('.skills');
    var $skillsParent = $('#skills');
    var skills = new Waypoint.Inview({
        element: $skills[0],
        enter: function() {
            $loader.addClass('fadeOut').delay(1000).queue(function(){
                $(this).addClass('sendToBack');
            });
            $html.removeClass('preventScroll');
            $skills.removeClass('empty');
            $skillsParent.find("h1").removeClass('fadeOut');
            $skillsParent.find("div").removeClass('fadeOut');
            $skillsParent.find("h5").removeClass('fadeOut');
        },
        exited: function() {
            $skills.addClass('empty');
            $skillsParent.find("h1").addClass('fadeOut');
            $skillsParent.find("div").addClass('fadeOut');
            $skillsParent.find("h5").addClass('fadeOut');
        }
    });

    var $about = $('#about');
    var about = new Waypoint.Inview({
        element: $about[0],
        enter: function() {
            $loader.addClass('fadeOut').delay(1000).queue(function(){
                $(this).addClass('sendToBack');
            });
            $html.removeClass('preventScroll');
            $about.removeClass('fadeOut');
        },
        exited: function() {
            $about.addClass('fadeOut');
        }
    });

    var $career = $("#career .child");
    var $timeline = $career.find('.timeline-block');
    var career = new Waypoint.Inview({
        element: $career[0],
        enter: function() {
            $loader.addClass('fadeOut').delay(1000).queue(function(){
                $(this).addClass('sendToBack');
            });
            $html.removeClass('preventScroll');
            $career.removeClass('fadeOut');
        },
        exited: function() {
            $career.addClass('fadeOut');
            $timeline.each(function() {
                $(this).addClass('fadeOut');
            });
        }
    });

    var $portfolio = $("#portfolio .child");
    var portfolio = new Waypoint.Inview({
        element: $portfolio[0],
        enter: function() {
            $loader.addClass('fadeOut').delay(1000).queue(function(){
                $(this).addClass('sendToBack');
            });
            $html.removeClass('preventScroll');
            $portfolio.removeClass('fadeOut');
        },
        exited: function() {
            $portfolio.addClass('fadeOut');
        }
    });

    var $contact = $("#contact .child");
    var contact = new Waypoint.Inview({
        element: $contact[0],
        enter: function() {
            $loader.addClass('fadeOut').delay(1000).queue(function(){
                $(this).addClass('sendToBack');
            });
            $html.removeClass('preventScroll');
            $contact.removeClass('fadeOut');
        },
        exited: function() {
            $contact.addClass('fadeOut');
        }
    });
})

$(function() {
    /* navigation */
    var pull 		= $('#pull');
        menu 		= $('nav ul');
        navigationLink = $('nav ul li');
        menuHeight	= menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });

    $(navigationLink).on('click', function(e) {
        var w = $(window).width();
        if(w <= 600) {
            e.preventDefault();
            menu.slideToggle();
        }
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