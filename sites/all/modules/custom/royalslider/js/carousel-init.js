(function ($) {
  
$(window).load(function() {


  ////////////////////////
  // HOMEPAGE BANNER
  ///////////////////////

  $('.rs-slideshow').royalSlider({
    autoScaleSlider: true,
    //autoHeight: true,
    autoScaleSliderHeight: 289,
    // arrowsNavAutoHide: false,
    arrowsNav: false,
    sliderDrag: false,
    transitionType: 'fade',
    addActiveClass: true,
    navigateByClick: false,
    controlNavigation: 'bullets',
    controlsInside: true,
    block: {
      // animated blocks options go here
      fadeEffect: true,
      moveEffect: 'top',
      moveOffset: 40,
      speed: 400
    }
  });

}); // END .load()


// $(window).resize(function() {

//   // Throttle resize event
//   on_resize(function() {
//   })();

// });



// debulked onresize handler // https://github.com/louisremi/jquery-smartresize
// function on_resize(c,t){
//   onresize = function() {
//     clearTimeout(t);
//     t=setTimeout(c,100);
//   };
//   return c;
// };

} (jQuery));