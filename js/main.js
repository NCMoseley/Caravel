jQuery(document).ready(function ($) {


  $('.responsive').slick({
    speed: 300,
    autoplay: false,
    autoplaySpeed: 2000,
    fade: true,
    asNavFor: '.slider-nav',
  });
  $('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.responsive',
    focusOnSelect: true,
  });


});