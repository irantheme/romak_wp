import $ from 'jquery';
import SwiperJs from './../libs/SwiperJs';
/* ===============================================================
  Fullscreen image slider
=============================================================== */
class FullscreenSlider {
  constructor() {
    this.fullscreen = $('#fullscreen-image-slider');
    this.closeButton = $('#fullscreen-close');
    this.openButton = $('#projects .post .fullscreen-trigger');
    this.thumbnails = $('#projects .post .post-image img');
    this.src = [];
    this.wrapper = $('#fullscreen-image-slider .swiper-wrapper');
    this.swiper = new SwiperJs();
    this.addDataCounter();
    this.events();
  }

  events() {
    this.openButton.on('click', (e) => {
      this.open();
      // Initialize slider (Thumbnails)
      this.initSlider();
      // Add counter to open button
      this.addDataCounter();
      // Initialize swiper
      let counter = $(e.currentTarget).attr('data-counter');
      this.swiper.fullscreenSliderInit(counter);
    });

    this.closeButton.on('click', () => {
      this.close();
    });
  }

  initSlider() {
    this.thumbnails.each((index, el) => {
      this.src.push($(el).attr('src'));
    });

    this.thumbnails.each((index, el) => {
      this.wrapper.append(
        `<div class="swiper-slide"><img src="${this.src[index]}" alt=""></div>`
      );
    });
  }

  addDataCounter() {
    this.openButton.each((index, el) => {
      $(el).attr('data-counter', index);
    });
  }

  open() {
    this.fullscreen.fadeIn(500);
  }

  close() {
    this.fullscreen.fadeOut(500);
  }
}

export default FullscreenSlider;
