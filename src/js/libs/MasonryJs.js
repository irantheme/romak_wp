import $ from 'jquery';
/* ===============================================================
  Masonry Init
=============================================================== */
class MasonryJs {
  // Initialize
  constructor() {
    this.masonryInit();
  }

  masonryInit() {
    // Init Masonry
    let $grid = $('.grid-masonry').masonry({
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true,
      // gutter: 30,
      // horizontalOrder: true,
      // fitWidth: true,
      originLeft: false,
      transitionDuration: '0.5s',
      // initLayout: false,
      // disable window resize behavior
      // resize: false,
      stagger: 30,
      // containerStyle: null,
      // originTop: false,
      // stamp: '.stamp',
    });
    // Layout Masonry after each image loads
    $grid.imagesLoaded().progress(function () {
      $grid.masonry('layout');
    });
    $grid.masonry('reloadItems');
    $grid.masonry('layout');
  }
}

export default MasonryJs;
