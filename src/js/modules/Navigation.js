import $ from 'jquery';
/* ===============================================================
  Nav Options
=============================================================== */
class MainMenu {
  // Initialize
  constructor() {
    this.btnOpen = $('#nav-open');
    this.wrapper = $('#wrapper');
    this.navigation = $('#navigation');
    this.wrapperMask = $('#wrapper-mask');
    this.btnClose = $('#back-nav');
    this.events();
    this.isOpen = false;
  }

  events() {
    this.btnOpen.on('click', () => {
      this.open();
    });
    this.btnClose.on('click', () => {
      this.close();
    });
    this.wrapperMask.on('click', () => {
      this.close();
    });
    $(document).on('keydown', (e) => {
      this.keyPressDispatcher(e);
    });
  }

  // Toggle nav
  open() {
    this.btnOpen.addClass('active');
    this.wrapper.addClass('active');
    this.navigation.addClass('active');
    this.wrapperMask.delay(600).fadeIn();
    this.isOpen = true;
  }

  // Close nav
  close() {
    this.btnOpen.removeClass('active');
    this.wrapper.removeClass('active');
    this.navigation.removeClass('active');
    this.wrapperMask.fadeOut();
    this.isOpen = false;
  }

  // Open & close with keypress
  keyPressDispatcher(e) {
    if (e.keyCode == 77 && !this.isOpen && !$('input, textarea').is(':focus')) {
      this.open();
    }
    if (e.keyCode == 27 && this.isOpen && !$('input, textarea').is(':focus')) {
      this.close();
    }
  }
}

export default MainMenu;
