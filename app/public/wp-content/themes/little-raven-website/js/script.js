// Calendar JavaScript
jQuery(document).ready(function($) {
    $(".post-edit-link").addClass("hide-element");

    // // Mobile View Click

    // $('.simcal-events-dots').on('click', showCalendarContent);
    // $('.simcal-event-title').on('click', hideCalendarContent);

    // function showCalendarContent(e) {
    // 	console.log($(e.target));
    // 	console.log(e);
    // 	// e.currentTarget.css('display', 'none');
    // 	$(e.currentTarget).siblings('ul').addClass('visible-display');
    // 	$(e.currentTarget).siblings('ul').children('.simcal-event-title').addClass('visible-display');
    // 	// $(e.currentTarget).addClass('hidden-display');
    // }

    // function hideCalendarContent(e) {
    // 	console.log(e.target);
    // }

    // Background video JavaScript

    function bgVidTime() {
        setTimeout(function() {
            $(".page-video")
                .removeClass("hidden")
                .addClass("visible");
            setTimeout(function() {
                $(".page-video")
                    .addClass("hidden")
                    .removeClass("visible");
                bgVidTime();
            }, 3000);
        }, 7000);
    }

    bgVidTime();
});