"use strict";

// Wait for the dom to be loaded
$(document).ready(function() {

    // Handle menu display
    $(".menu-hamburger").click(function() {
        $("#menu").removeClass("kill-menu-display").addClass("active-menu-display");
    });

    $(".close-button").click(function() {
        console.log("kill-menu");
    });

    // Handle menu hover
    $("nav a").mouseover(function() {
        // Find the overlay bottom item and add class
        $(this).find(".line-overlay").addClass("active");

        // on current item mouse leave, remove class
        $(this).mouseleave(function() {
            $(this).find(".line-overlay").removeClass("active");
        });
    });


});
