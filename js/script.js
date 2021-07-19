function animateCSS(element, animationName, callback) {
    const node = document.querySelector(element)
    node.classList.add('animated', animationName)

    function handleAnimationEnd() {
        node.classList.remove('animated', animationName)
        node.removeEventListener('animationend', handleAnimationEnd)

        if (typeof callback === 'function') callback()
    }

    node.addEventListener('animationend', handleAnimationEnd)
}

// onclick="openImg('imgs/card.png', 'title');"

$(function () {
  'use strict';

  $('.navbar .navbar-nav li').on('click', function () {
    $(this).addClass('active').siblings().removeClass("active");
    $("#" + $(this).data('class')).removeClass('d-none').siblings().addClass("d-none");
  });

  $('.cardImg').on('click', function functionName() {
    Swal.fire({
      imageUrl: $(this).data('class'),
      imageAlt: "Full Page Img"
    })
  });

  $('.profile .close').on('click', function () {
    $(".profile").addClass('d-none');
    $("#profile").removeClass("col-lg-3");
    $("#content").removeClass("col-lg-9").addClass("col-lg-12");
  });

  if ($('#totop').length) {
      var scrollTrigger = 100, // px
          backtotop = function () {
              var scrollTop = $(window).scrollTop();
              if (scrollTop > scrollTrigger) {
                  $('#totop').removeClass('d-none');
              } else {
                  $('#totop').addClass('d-none');
              }
          };
      backtotop();
      $(window).on('scroll', function () {
          backtotop();
      });
      $('#totop').on('click', function (e) {
          e.preventDefault();
          $('html,body').animate({
              scrollTop: 0
          }, 400);
      });
  }
});
