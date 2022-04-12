/* ===============================================================
  Swiper Init
=============================================================== */
class SwiperJs {
  constructor() {
    // Partners brands slider init
    let partner = new Swiper('.partners-slider', {
      slidesPerView: 5,
      spaceBetween: 30,
      // freeMode: true,
      // centeredSlides: true,
      centeredSlides: true,
      roundLengths: true,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      // pagination: {
      //   // el: '.swiper-pagination',
      //   clickable: true,
      // },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        // when window width is >= 480px
        575: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        // when window width is >= 640px
        767: {
          slidesPerView: 5,
          spaceBetween: 20,
        },
        991: {
          slidesPerView: 5,
          spaceBetween: 30,
        },
      },
    });
    // Partners viewpoint slider init
    let viewpoint = new Swiper('.viewpoint', {
      loop: true,
      autoplay: {
        delay: 8000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    // Related post
    let relatedPost = new Swiper('.related-post-slider', {
      slidesPerView: 1,
      spaceBetween: 30,
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        // when window width is >= 320px
        // 320: {
        //   slidesPerView: 1,
        // },
        // // when window width is >= 480px
        // 575: {
        //   slidesPerView: 2,
        // },
        // // when window width is >= 640px
        // 767: {
        //   slidesPerView: 2,
        // },
        // 991: {
        //   slidesPerView: 3,
        // },
        // 1199: {
        //   slidesPerView: 3,
        // },
        1376: {
          slidesPerView: 2,
        },
      },
    });
    let galleryPost = new Swiper('.gallery-swiper', {
      navigation: {
        nextEl: '.post-image-next',
        prevEl: '.post-image-prev',
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  }

  fullscreenSliderInit(initialSlideData = 0) {
    let fullScreenSlider = new Swiper('.fullscreen-slider', {
      slidesPerView: 1,
      // spaceBetween: 30,
      // slidesPerGroup: 1,
      // loop: true,
      // loopFillGroupWithBlank: true,
      centeredSlides: true,
      // roundLengths: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      initialSlide: initialSlideData,
    });
  }
}

export default SwiperJs;
