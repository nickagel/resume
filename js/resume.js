$(function(){
    var $skills = $('.skills');
    var $skillsParent = $('#skills');
    var skills = new Waypoint.Inview({
        element: $skills[0],
        enter: function() {
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
            $about.removeClass('fadeOut');
        },
        exited: function() {
            $about.addClass('fadeOut');
        }
    });

    var $career = $("#career .child");
    var career = new Waypoint.Inview({
        element: $career[0],
        enter: function() {
            $career.removeClass('fadeOut');
        },
        exited: function() {
            $career.addClass('fadeOut');
            $career.find('.timeline-block').each(function() {
                $(this).addClass('fadeOut');
            });
        }
    });

    var $portfolio = $("#portfolio .child");
    var portfolio = new Waypoint.Inview({
        element: $portfolio[0],
        enter: function() {
            $portfolio.removeClass('fadeOut');
            $portfolio.find('a div').removeClass('shrink');
        },
        exited: function() {
            $portfolio.addClass('fadeOut');
            $portfolio.find('a div').addClass('shrink');
        }
    });

    var $contact = $("#contact .child");
    var contact = new Waypoint.Inview({
        element: $contact[0],
        enter: function() {
            $contact.removeClass('fadeOut');
        },
        exited: function() {
            $contact.addClass('fadeOut');
        }
    });
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
        if(w <= 680) {
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
            }, 250);
        }
    });

    /*contact form*/
	var form = $('#ajax-contact');
	var formMessages = $('#form-messages');

	$(form).submit(function(e) {
		e.preventDefault();
		var formData = $(form).serialize();

		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			$(formMessages).text(response);

			$('#name').val('');
			$('#email').val('');
			$('#message').val('');
		})
		.fail(function(data) {
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});