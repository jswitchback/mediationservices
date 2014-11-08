(function ($, Drupal, window, document, undefined) {
  
$(document).ready(function() {

  // Mobile
  enquire.register('screen and (max-width:47.9375em)', {

      // OPTIONAL
      // If supplied, triggered when a media query matches.
      match : function() {
        // alert('match');
        toggleMenu.init();
      },
                                  
      // OPTIONAL
      // If supplied, triggered when the media query transitions 
      // *from a matched state to an unmatched state*.
      unmatch : function() {
        // alert('unmatch');
        toggleMenu.destroy();
      },
      
      // OPTIONAL
      // If supplied, triggered once, when the handler is registered.
      setup : function() {
        // alert('handler registered');
        toggleMenu.init();
      },
                                  
      // OPTIONAL, defaults to false
      // If set to true, defers execution of the setup function 
      // until the first time the media query is matched
      deferSetup : false,
                                  
      // OPTIONAL
      // If supplied, triggered when handler is unregistered. 
      // Place cleanup code here
      destroy : function() {}
        
  });

});  // End Ready


  var toggleMenu = {

    init : function () {
      var mainNavToggle = $('#toggle-nav'),
          $body = $('body');
      
      $(mainNavToggle).on('click', function(event){
        event.preventDefault();
        event.stopPropagation();

        $body.toggleClass('show-nav');
      });

    },
    destroy : function () {
      $('body').removeClass('show-nav');
    }
  };

})(jQuery, Drupal, this, this.document);