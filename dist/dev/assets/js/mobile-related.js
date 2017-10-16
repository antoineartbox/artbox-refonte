"use strict";

// Wait for the dom to be loaded
$(document).ready(function() {

    // Check if on project single project page
    if($(".single-project").length > 0) {
        initResize();
    }

    // Make text responsive
    $(".single-project-description").fitText(1.5, { minFontSize: '15px', maxFontSize: '24px'});
    $(".header-description p").fitText(1.5, { minFontSize: '15px', maxFontSize: '24px'});
    // Make the paragraph of project infos toggable
    $(".project-infos h4").click(function() {
        $(this).parent().find("p").slideToggle(500);
    })



});

function initResize() {
    $( window ).resize(function() {
        if (window.innerWidth < 550) {
            killIframe();
        }
    });
}

function killIframe() {
    $("iframe").remove();
}


// Define a function for text resizing
function resizeText() {

}



// Function for text resizing
(function( $ ){

  $.fn.fitText = function( kompressor, options ) {

    // Setup options
    var compressor = kompressor || 1,
        settings = $.extend({
          'minFontSize' : Number.NEGATIVE_INFINITY,
          'maxFontSize' : Number.POSITIVE_INFINITY
        }, options);

    return this.each(function(){

      // Store the object
      var $this = $(this);

      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*35), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };

      // Call once to set.
      resizer();

      // Call on resize. Opera debounces their resize by default.
      $(window).on('resize.fittext orientationchange.fittext', resizer);

    });

  };

})( jQuery );
