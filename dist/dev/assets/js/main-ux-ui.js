"use strict";

// Wait for the dom to be loaded
$(document).ready(function() {

    // Handle menu hover
    // Get menu a
    $("nav a").mouseover(function() {

        // Find the overlay bottom item
        $(this).find(".line-overlay").addClass("active");
        $(this).mouseleave(function() {
            $(this).find(".line-overlay").removeClass("active");
        });
    });


});
