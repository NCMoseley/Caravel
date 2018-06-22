/* eslint-disable */

jQuery(document).ready(function ($) {

  $('.toggle-container').on('click', function () {
    $('.nav-menu-container').toggleClass('mobile-nav');
    $('.hamburger--slider').toggleClass('is-active');
  })

  $(window).resize(function () {
    if ($(window).width() > 620) {
      $('.hamburger--slider').removeClass('is-active');
      $('.nav-menu-container').removeClass('mobile-nav');
    }
  });

  var nlform = new NLForm(document.getElementById('nl-form'));

  $('.responsive').slick({
    fade: true,
    asNavFor: '.slider-nav',
  });
  $('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.responsive'
  });


});