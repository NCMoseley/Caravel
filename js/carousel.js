// jQuery(document).ready(function ($) {
//   var nav = document.querySelector('#site-navigation');

//   var waypoint = new Waypoint({
//     element: document.getElementById('Sean'),
//     handler: function () {
//       this.element.classList.add('slide-in-left');
//     },
//     offset: 400
//   })
//   var waypoint2 = new Waypoint({
//     element: document.getElementById('Nate'),
//     handler: function () {
//       this.element.classList.add('slide-in-right');
//     },
//     offset: 400
//   })
//   var waypoint3 = new Waypoint({
//     element: document.getElementById('Colin'),
//     handler: function () {
//       this.element.classList.add('slide-in-left');
//     },
//     offset: 400
//   })
//   var waypoint4 = new Waypoint({
//     element: document.getElementById('Ilya'),
//     handler: function () {
//       this.element.classList.add('slide-in-right');
//     },
//     offset: 400
//   })

//   var lastScrollTop = 0;
//   window.addEventListener("scroll", function () {
//     var scrollTop = window.pageYOffset;
//     if (scrollTop > lastScrollTop){
//         nav.classList.remove('navSlide');
//     } else {
//       nav.classList.add('navSlide');
//     }
//     lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
//   }, false);



//   $('#fullpage').fullpage({
//     // anchors:['firstPage', 'secondPage'],
//     css3: true,
//     scrollingSpeed: 1100,
//     autoScrolling: false,
//     navigation: false,
//     navigationPosition: 'left',
//     loopHorizontal: true,
//     keyboardScrolling: true,
//     easing: 'easeInOutCubic',
//     easingcss3: 'ease',
//     controlArrows: true,
//     fitToSection: false
//   });
// });