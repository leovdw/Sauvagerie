module.exports = function() {
  if ( $('.home__campain__vds--wraper')) {
    $('.home__campain__vds--wraper').slick({
      infinite: false,
      centerMode: true,
      centerPadding: '150px',
      dots: true,
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
  }

  if ($('.conceptions__articles--wraper')) {
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
      autoplaySpeed: 3000,
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



  (function video_home() {
    var home__video = document.querySelector('.home__video iframe');
    var close       = document.querySelector('.vdo_exit');
    var video       = localStorage.getItem('video');
    console.log(video);
    if (home__video && (video == null || video == 'seen')) {
      home__video.classList.add('full');

      setTimeout(function(){
        close.classList.add('displayed');
      }, 3000);

      close.addEventListener("click", function(e){
        e.preventDefault();
        home__video.classList.remove('full');
        close.classList.remove('displayed');
      });

      localStorage.setItem('video', 'seen');
    }
  })()
}
