"use strict";

// Wait for the dom to be loaded
$(document).ready(function() {

    // Handle menu display
    $(".menu-hamburger").click(function() {
        $("#menu").removeClass("kill-menu-display").addClass("active-menu-display");

    });

    $(".close-button").click(function() {

        $("#menu").removeClass("active-menu-display").addClass("kill-menu-display");
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


    // Handle project for left-right handling

    // Get all projects infos children from parent container
    var allProjectsInfos = $("#project-infos-container .project-infos");

    // Init a new position to 1 / 3 of window height
    var position = window.innerHeight / 3;

    // loops through all child
    for (var i = 0; i < allProjectsInfos.length; i++) {

        // Set position = to position
        $(allProjectsInfos[i]).css({
            "top" : position + "px"
        });

        // Increment position
        position += 100;
    }

    // Kill video display in in mobile
    if (window.innerWidth < 550) {
        $("iframe").remove();
    }

    // Check for resize and kill display
    $( window ).resize(function() {
        if (window.innerWidth < 550) {
            $("iframe").remove();
        }
    });


    // Handle all profile image name display
    $(".image-member").mouseover(function() {
        $(this).find(".member-name").addClass("active-name");
        $(this).mouseleave(function() {
            $(this).find(".member-name").removeClass("active-name");
        });
    });


    // Handle all projects image name display
    $(".single-project-thumbnail-container").mouseover(function() {
        $(this).find(".project-infos").addClass("active-project-infos");
        $(this).mouseleave(function() {
            $(this).find(".project-infos").removeClass("active-project-infos");
        });
    });



});
