$('.gallery-slider').slick({
    autoplay: false,
    slidesToShow: 1,
  	slidesToScroll: 1,
  	speed: 1200,
  	autoplaySpeed: 500,
    fade: true,
    arrows: true,
    prevArrow: '.gallery-slider__button_prev',
    nextArrow: '.gallery-slider__button_next',
    asNavFor: '.gallery-slider-nav'
  });

$('.gallery-slider-nav').slick({
  slidesToShow: 7,
  slidesToScroll: 1,
  asNavFor: '.gallery-slider',
  dots: false,
  focusOnSelect: true,
  arrows: true,
  prevArrow: '.gallery-slider-nav__button_prev',
  nextArrow: '.gallery-slider-nav__button_next',
  responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 4,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
      }
    }
  ]

});