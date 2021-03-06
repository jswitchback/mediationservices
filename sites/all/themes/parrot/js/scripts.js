// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.custom_behavior = {
  attach: function(context, settings) {

  $(document).ready(function($) {
    var mainNavToggle = $('#toggle-nav'),
        $body = $('body');
    
    // MOBILE MENU
    $(mainNavToggle).on('click', function(event){
      event.preventDefault();
      event.stopPropagation();

      $body.toggleClass('show-nav');
    });

	}); // END READY

  }
};



})(jQuery, Drupal, this, this.document);
