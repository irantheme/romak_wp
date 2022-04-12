import $ from 'jquery';
/* ===============================================================
  Search
=============================================================== */
class Search {
  // Initialize
  constructor() {
    this.searchBox = $('#search-box');
    this.searchAltButton = $('#header-blog .social-networks .search-alt');
    this.searchCloseButton = $('#search-box-close');
    this.searchInput = $('#search-box .search-input');
    this.spinnerAlt = $('#spinner-alt');
    this.searchAlt = $('#search-alt');
    this.searchResults = $('#search-box .search-results');
    this.events();
    this.timer;
    this.previousSearchInputValue = '';
    this.spinnerStatus = false;
    this.isOpen = false;
  }

  // Events
  events() {
    // Toggle and close form
    this.searchAltButton.on('click', () => {
      console.log('fs;ldljf');
      this.open();
    });
    this.searchCloseButton.on('click', () => {
      this.close();
    });
    // Trigger keypress
    $(document).on('keydown', (e) => {
      this.keyPressDispatcher(e);
    });
    // Trigger keyup
    this.searchInput.on('keyup', () => {
      // Get input search input value
      var searchInputValue = this.searchInput.val();
      // Check search input value
      if (searchInputValue != this.previousSearchInputValue) {
        clearTimeout(this.timer);
        if (searchInputValue) {
          // Check search input value with previous value & length
          this.enableSpinner();
          // Enable spinner
          this.timer = setTimeout(() => {
            // Get live search data
            this.trigger();
          }, 1000);
        } else {
          this.searchResults.html('');
          this.disableSpinner();
          this.searchResults.hide();
        }
      }
      this.previousSearchInputValue = searchInputValue;
    });
    // Hide search results
    $(document).on('click', (e) => {
      if (!$(e.target).closest('.search-form').length) {
        this.searchResults.hide();
      }
    });
  }

  trigger() {
    this.searchResults.show();
    // Get json data with api
    $.getJSON(
      wpData.rootUrl +
        '/wp-json/json/v1/search/?term=' +
        this.searchInput.val(),
      (result) => {
        $('.search-results').html(`
          <div class="row">
          ${
            result.generalInfo.length
              ? ''
              : '<div class="search-not-found">نتیجه ای برای کلمات جستجو شده یافت نشد</div>'
          }
          ${result.generalInfo
            .map(
              (item) => `
                <div class="col-lg-4 col-md-6">
                  <div class="list-post-style list-post-dark">
                    ${
                      item.imageSrc
                        ? `<div class="list-post-style-img">
                      <a href="${item.permalink}">
                        ${
                          item.imageSrc
                            ? '<img src="' +
                              item.imageSrc +
                              '" alt="تصویر پست">'
                            : ''
                        }
                      </a>
                    </div>`
                        : ''
                    }
                    <div class="list-post-style-content">
                      <h3><a href="${item.permalink}">${item.title}</a></h3>
                      <span>${item.date}</span>
                    </div>
                  </div>
                </div>
              `
            )
            .join('')}
            </div>
        `);
        // Stop spinner!
        this.disableSpinner();
      }
    );
  }

  // Open search form
  open() {
    this.searchBox.fadeIn(500);
    this.isOpen = true;
    setTimeout(() => {
      this.searchInput.focus();
    }, 1001);
  }

  // Close search form
  close() {
    this.searchBox.fadeOut(500);
    this.isOpen = false;
  }

  // Open & close with keypress
  keyPressDispatcher(e) {
    if (e.keyCode == 83 && !this.isOpen && !$('input, textarea').is(':focus')) {
      this.open();
    }
    if (e.keyCode == 27 && this.isOpen) {
      this.close();
    }
  }

  // Spinner alt active (Rotate)
  enableSpinner() {
    this.searchAlt.hide();
    this.spinnerAlt.show();
  }

  // Search alt active (Disable rotate spinner)
  disableSpinner() {
    this.searchAlt.show();
    this.spinnerAlt.hide();
  }
}

export default Search;
