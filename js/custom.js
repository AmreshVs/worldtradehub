new WOW().init();

(function ($) {
  'use strict';

  $('a.smoth-scroll').on('click', function (e) {
    var anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $(anchor.attr('href')).offset().top - 50
    }, 1000);
    e.preventDefault();
  });

  $('.navbar-collapse .navbar-nav a').on('click', function () {
    $('.navbar-toggler:visible').click();
  });

  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 70) {
      $('.site-navigation,.trans-navigation').addClass('header-white');
    } else {
      $('.site-navigation,.trans-navigation').removeClass('header-white');
    }
  });

  $('body').scrollspy({
    target: '.navbar-collapse',
    offset: 195
  });

})(window.jQuery);