jQuery(document).ready(function ($) {

  console.log(document.querySelector('.slick-arrow'));




  $('.responsive').slick({

    fade: true,
    asNavFor: '.slider-nav',
    // prevArrow: '<i class="fas fa-arrow-left"></i>',
    // nextArrow: '<i class="fas fa-arrow-right"></i>'
  });
  $('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.responsive',
    // focusOnSelect: true,
  });


});