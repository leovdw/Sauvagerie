module.exports = function() {
  $('.home__campain__vds--wraper').slick({
    infinite: false,
    centerMode: true,
    centerPadding: '150px',
    slidesToShow: 1,
    prevArrow : '<div class="arrows arrow__prev"></div>',
    nextArrow : '<div class="arrows arrow__next"></div>',
    responsive : [
      {
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        centerMode: false,
      }
    },
    {
    breakpoint: 968,
    settings: {
      centerPadding: '0',
      }
    }
  ]
})

$('.conceptions__articles--wraper').slick({
  infinite: true,
  dots: true,
  centerMode: true,
  centerPadding: '150px',
  slidesToShow: 1,
  prevArrow : '<div class="arrows arrow__prev"></div>',
  nextArrow : '<div class="arrows arrow__next"></div>',
  autoplay: true,
  speed: 800,
  autoplaySpeed: 2000,
  responsive : [
    {
    breakpoint: 1200,
    settings: {
      slidesToShow: 1,
      centerMode: false,
    }
  },
  {
  breakpoint: 968,
  settings: {
    centerPadding: '0',
    }
  }
]
})

}
