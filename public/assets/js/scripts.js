jQuery(document).ready(function($) {
  new WOW().init();
  $('.slider').slick();
  $('.slider-detail').slick({
    fade: true
  });

  $('.slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
    var id = $('.slider').slick('slickCurrentSlide');
    $('.slider-detail').slick('slickGoTo',id,false);
  });
});