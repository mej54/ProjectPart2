$(document).ready(function(){
  $('.slider').slick({
    dots: true,
    arrows: false,
    centerMode: true,
    slidesToShow: 1,
    variableWidth: true,
    variableHeight: true,
    centerPadding: '20px',
    autoplay: true,
    autoplaySpeed: 2000,
  });
});