
$('.document-slider').slick({
    autoplay: false,
    slidesToShow: 4,
  	slidesToScroll: 1,
  	speed: 1200,
  	autoplaySpeed: 500,
  	arrows: true,
  	prevArrow: $('.document-slider__button_prev'),
	nextArrow: $('.document-slider__button_next'),
  	responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 3,
        infinite: true
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