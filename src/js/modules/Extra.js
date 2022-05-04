import $ from 'jquery';
/* ===============================================================
  Extra
=============================================================== */
class Extra {
  constructor() {
    this.events();
    this.hideGoToTop();
  }

  events() {
    this.scrollSpy();
    this.setHeightMiniProfileAvatar();
    this.tooltips();
    $(window).resize(this.setHeightMiniProfileAvatar);
    $(window).scroll(this.hideGoToTop);
    this.shareListToggle();
  }

  scrollSpy() {
    $('a[href*="#"]:not([href="#"])').on('click', function () {
      // Get hash for create id
      let hash = this.hash;
      // Select element for move
      $('html, body').animate(
        {
          scrollTop: $(hash).offset().top,
        },
        1000
      );
      // Checking specific id
      if (this.id == 'go-down' || this.id == 'go-to-top') {
        // Adding active class
        $(this).addClass('active');
        // Remove active class with delay (After scrolled)
        setTimeout(() => {
          $('#' + this.id).removeClass('active');
        }, 1000);
      }
    });
  }

  setHeightMiniProfileAvatar() {
    let element = $('.mini-profile .mini-profile-avatar img');
    let width = $(element).width();
    $(element).height(width);
  }

  tooltips() {
    $('[data-toggle="tooltip"]').tooltip();
  }

  // Hide go to top button
  hideGoToTop() {
    if ($(window).scrollTop() > $(window).height()) {
      $('#go-to-top').fadeIn(250);
    } else {
      $('#go-to-top').fadeOut(250);
    }
  }

  // Toggle of share list
  shareListToggle() {
    $('#button-share-toggle-list').on('click', () => {
      $('.single-share-list').toggleClass('active');
    });
  }
}

export default Extra;
