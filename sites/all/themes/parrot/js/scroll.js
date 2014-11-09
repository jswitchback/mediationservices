// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.scroll_behavior = {
  attach: function(context, settings) {

  $(document).ready(function($) {
    var $body = $('body'),
        $scrollTarget = $('#panels-ipe-paneid-29'),
        toTop = parsInt($scrollTarget.offset().top, 10);

    // SCROLL CLASSES
    $(window).scroll(function() {
        var scroll = parseInt($(window).scrollTop(),10);

         //>=, not <=
        if (scroll >= toTop) {
            $body.addClass('panel-in-view');
        }
    });

	}); // END READY

  }
};



})(jQuery, Drupal, this, this.document);