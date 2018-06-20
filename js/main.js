jQuery(document).ready(function ($) {


  $('.responsive').slick({

    fade: true,
    asNavFor: '.slider-nav',
  });
  $('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.responsive',
    // focusOnSelect: true,
  });


});