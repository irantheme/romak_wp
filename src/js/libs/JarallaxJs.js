import $ from 'jquery';
/* ===============================================================
  Category Trigger (Toggle of posts)
=============================================================== */
class JarallaxJs {
  constructor() {
    this.frontHeader();
    this.frontPartners();
    this.blogHeader();
    this.events();
  }

  events() {}

  // Front header init
  frontHeader() {
    $('#parallax-front-header').jarallax({
      imgSrc: wpData.frontHeaderBg,
      speed: 0.5,
      type: 'scroll',
      imgPosition: 'left',
    });
  }

  // Front partners init
  frontPartners() {
    $('#parallax-front-partners').jarallax({
      imgSrc: wpData.frontPartnersBg,
      speed: 0.5,
      type: 'scroll',
      imgPosition: 'left',
    });
  }

  // Blog header init
  blogHeader() {
    $('#parallax-blog-header').jarallax({
      imgSrc: wpData.BlogHeaderBg,
      speed: 0.5,
      type: 'scroll',
      imgPosition: 'left',
    });
  }
}

export default JarallaxJs;
