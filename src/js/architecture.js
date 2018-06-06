var architectureGallery = (function() {

    var mainGal = $('.js-architecture__gallery');
    var navGal = $('.js-architecture__nav-gallery');
    

    mainGal.slick({
        prevArrow: $('.gallery-arrow_architecture-prev'),
        nextArrow: $('.gallery-arrow_architecture-next'),
    });

    navGal.slick({
        nextArrow: $('.gallery-arrow_architecture-nav-next'),
        prevArrow: $('.gallery-arrow_architecture-nav-prev'),
        asNavFor: mainGal,
        slidesToShow: 7,
        focusOnSelect: true,
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2
              }
            }
          ]
    });
})();