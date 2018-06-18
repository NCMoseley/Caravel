jQuery(document).ready(function ($) {

  // setTimeout(function () {
  //   requestAnimationFrame(scroll);
  //   function scroll() {
  //     if (scrollY >= 900) {
  //       return
  //     }
  //     console.log(scrollY);
  //     window.scrollBy(0, 10);
  //     requestAnimationFrame(scroll);
  //   }
  // }, 7000);

  // setTimeout(function () {
  //   console.log(scrollY);
  //   window.scroll({
  //     top: 1000,
  //     behavior: 'smooth'
  //   });
  // }, 7000);

  // window.addEventListener('scroll', function () {
  //   console.log(scrollY)
  // })

  // if (window.scrollY <= 50) {
  //   setTimeout(function () {
  //     var offset = 0;
  //     var target = $('.header-container');
  //     var scrollTo = $(target).offset().top + offset;
  //     $('html, body').animate({
  //         scrollTop: scrollTo
  //       },
  //       2000
  //     );
  //   }, 7000);
  // }

  if ($('body').hasClass('home')) {
    $('a[href*=#]').bind('click', function (e) {
      e.preventDefault();
      var target = $(this).attr('href');
      var scrollTo = $(target).offset().top;
      $('html, body').animate({
          scrollTop: scrollTo
        },
        1500
      );
    });
  }

  function offsetAnchor() {
    if (location.hash.length !== 0) {
      window.scrollTo(window.scrollX, window.scrollY - 140);
    }
  }
  $(window).on('hashchange', offsetAnchor);

  window.setTimeout(offsetAnchor, 1);
});