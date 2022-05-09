/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/css/main.scss":
/*!***************************!*\
  !*** ./src/css/main.scss ***!
  \***************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./css/main.scss */ "./src/css/main.scss");
/* harmony import */ var _js_libs_MasonryJs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/libs/MasonryJs */ "./src/js/libs/MasonryJs.js");
/* harmony import */ var _js_libs_SwiperJs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/libs/SwiperJs */ "./src/js/libs/SwiperJs.js");
/* harmony import */ var _js_libs_JarallaxJs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/libs/JarallaxJs */ "./src/js/libs/JarallaxJs.js");
/* harmony import */ var _js_libs_AosJs__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./js/libs/AosJs */ "./src/js/libs/AosJs.js");
/* harmony import */ var _js_modules_Extra__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./js/modules/Extra */ "./src/js/modules/Extra.js");
/* harmony import */ var _js_modules_Search__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./js/modules/Search */ "./src/js/modules/Search.js");
/* harmony import */ var _js_modules_Navigation__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./js/modules/Navigation */ "./src/js/modules/Navigation.js");
/* harmony import */ var _js_modules_LoadPosts__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./js/modules/LoadPosts */ "./src/js/modules/LoadPosts.js");
/* harmony import */ var _js_modules_CategoryTrigger__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./js/modules/CategoryTrigger */ "./src/js/modules/CategoryTrigger.js");
/* harmony import */ var _js_modules_Like__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./js/modules/Like */ "./src/js/modules/Like.js");
/* harmony import */ var _js_modules_FullscreenSlider__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./js/modules/FullscreenSlider */ "./src/js/modules/FullscreenSlider.js");
 // Libs




 // Modules






 // Hooks

 // Init objects

let navigation = new _js_modules_Navigation__WEBPACK_IMPORTED_MODULE_7__["default"]();
let extra = new _js_modules_Extra__WEBPACK_IMPORTED_MODULE_5__["default"]();
let search = new _js_modules_Search__WEBPACK_IMPORTED_MODULE_6__["default"]();
let loadPosts = new _js_modules_LoadPosts__WEBPACK_IMPORTED_MODULE_8__["default"]();
let masonryJs = new _js_libs_MasonryJs__WEBPACK_IMPORTED_MODULE_1__["default"]();
let swiper = new _js_libs_SwiperJs__WEBPACK_IMPORTED_MODULE_2__["default"]();
let categoryTrigger = new _js_modules_CategoryTrigger__WEBPACK_IMPORTED_MODULE_9__["default"]();
let like = new _js_modules_Like__WEBPACK_IMPORTED_MODULE_10__["default"]();
let jarallax = new _js_libs_JarallaxJs__WEBPACK_IMPORTED_MODULE_3__["default"]();
let fullscreenSlider = new _js_modules_FullscreenSlider__WEBPACK_IMPORTED_MODULE_11__["default"]();
let aosJs = new _js_libs_AosJs__WEBPACK_IMPORTED_MODULE_4__["default"]();

/***/ }),

/***/ "./src/js/libs/AosJs.js":
/*!******************************!*\
  !*** ./src/js/libs/AosJs.js ***!
  \******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/* ===============================================================
  Category Trigger (Toggle of posts)
=============================================================== */

class AosJs {
  constructor() {
    AOS.init(); // You can also pass an optional settings object
    // below listed default settings

    AOS.init({
      // Global settings:
      disable: false,
      // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      startEvent: 'DOMContentLoaded',
      // name of the event dispatched on the document, that AOS should initialize on
      initClassName: 'aos-init',
      // class applied after initialization
      animatedClassName: 'aos-animate',
      // class applied on animation
      useClassNames: false,
      // if true, will add content of `data-aos` as classes on scroll
      disableMutationObserver: false,
      // disables automatic mutations' detections (advanced)
      debounceDelay: 50,
      // the delay on debounce used while resizing window (advanced)
      throttleDelay: 99,
      // the delay on throttle used while scrolling the page (advanced)
      // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      offset: 120,
      // offset (in px) from the original trigger point
      delay: 0,
      // values from 0 to 3000, with step 50ms
      duration: 1000,
      // values from 0 to 3000, with step 50ms
      easing: 'ease',
      // default easing for AOS animations
      once: true,
      // whether animation should happen only once - while scrolling down
      mirror: false,
      // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom' // defines which position of the element regarding to window should trigger the animation

    });
  }

  events() {}

}

/* harmony default export */ __webpack_exports__["default"] = (AosJs);

/***/ }),

/***/ "./src/js/libs/JarallaxJs.js":
/*!***********************************!*\
  !*** ./src/js/libs/JarallaxJs.js ***!
  \***********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

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

  events() {} // Front header init


  frontHeader() {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('#parallax-front-header').jarallax({
      imgSrc: wpData.frontHeaderBg,
      speed: 0.5,
      type: 'scroll',
      imgPosition: 'left'
    });
  } // Front partners init


  frontPartners() {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('#parallax-front-partners').jarallax({
      imgSrc: wpData.frontPartnersBg,
      speed: 0.5,
      type: 'scroll',
      imgPosition: 'left'
    });
  } // Blog header init


  blogHeader() {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('#parallax-blog-header').jarallax({
      imgSrc: wpData.BlogHeaderBg,
      speed: 0.5,
      type: 'scroll',
      imgPosition: 'left'
    });
  }

}

/* harmony default export */ __webpack_exports__["default"] = (JarallaxJs);

/***/ }),

/***/ "./src/js/libs/MasonryJs.js":
/*!**********************************!*\
  !*** ./src/js/libs/MasonryJs.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

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
    let $grid = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.grid-masonry').masonry({
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
      stagger: 30 // containerStyle: null,
      // originTop: false,
      // stamp: '.stamp',

    }); // Layout Masonry after each image loads

    $grid.imagesLoaded().progress(function () {
      $grid.masonry('layout');
    });
    $grid.masonry('reloadItems');
    $grid.masonry('layout');
  }

}

/* harmony default export */ __webpack_exports__["default"] = (MasonryJs);

/***/ }),

/***/ "./src/js/libs/SwiperJs.js":
/*!*********************************!*\
  !*** ./src/js/libs/SwiperJs.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
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
        disableOnInteraction: false
      },
      // pagination: {
      //   // el: '.swiper-pagination',
      //   clickable: true,
      // },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 3,
          spaceBetween: 10
        },
        // when window width is >= 480px
        575: {
          slidesPerView: 3,
          spaceBetween: 10
        },
        // when window width is >= 640px
        767: {
          slidesPerView: 5,
          spaceBetween: 20
        },
        991: {
          slidesPerView: 5,
          spaceBetween: 30
        }
      }
    }); // Partners viewpoint slider init

    let viewpoint = new Swiper('.viewpoint', {
      loop: true,
      autoplay: {
        delay: 8000,
        disableOnInteraction: false
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      }
    }); // Related post

    let relatedPost = new Swiper('.related-post-slider', {
      slidesPerView: 1,
      spaceBetween: 30,
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
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
          slidesPerView: 2
        }
      }
    });
    let galleryPost = new Swiper('.gallery-swiper', {
      navigation: {
        nextEl: '.post-image-next',
        prevEl: '.post-image-prev'
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      }
    });
  }

  fullscreenSliderInit() {
    let initialSlideData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
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
        prevEl: '.swiper-button-prev'
      },
      initialSlide: initialSlideData
    });
  }

}

/* harmony default export */ __webpack_exports__["default"] = (SwiperJs);

/***/ }),

/***/ "./src/js/modules/CategoryTrigger.js":
/*!*******************************************!*\
  !*** ./src/js/modules/CategoryTrigger.js ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _libs_MasonryJs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./../libs/MasonryJs */ "./src/js/libs/MasonryJs.js");


/* ===============================================================
  Category Trigger (Toggle of posts)
=============================================================== */

class CategoryTrigger {
  constructor() {
    let masonryJs = new _libs_MasonryJs__WEBPACK_IMPORTED_MODULE_1__["default"](); // Back to all posts

    jquery__WEBPACK_IMPORTED_MODULE_0___default()('#all-categories').on('click', function () {
      // Remove all active list category
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.categories ul li span').removeClass('active'); // Add active to clicked category

      jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass('active');
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('#projects .post-holder[data-cate]').show();
      masonryJs.masonryInit();
    }); // Categorize and alignment posts

    jquery__WEBPACK_IMPORTED_MODULE_0___default()('.categories ul li span:not(#all-categories)').on('click', function () {
      // Remove all active list category
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.categories ul li span').removeClass('active'); // Add active to clicked category

      jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass('active'); // Remove all posts

      jquery__WEBPACK_IMPORTED_MODULE_0___default()('#projects .post-holder[data-cate]').hide(); // Get current category data

      var baseData = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).data('cate');
      var posts = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#projects .post-holder[data-cate]');
      let dataFiltered;
      console.log(posts); // Loop from posts

      for (let i = 0; i < posts.length; i++) {
        // Split data post
        let dataPost = jquery__WEBPACK_IMPORTED_MODULE_0___default()(posts[i]).attr('data-cate').split(','); // Remove last additional index array

        dataFiltered = dataPost.filter(function (el) {
          return el != '';
        }); // Check duplicated data and destroy

        let uniqueData = [];
        jquery__WEBPACK_IMPORTED_MODULE_0___default.a.each(dataFiltered, function (i, el) {
          if (jquery__WEBPACK_IMPORTED_MODULE_0___default.a.inArray(el, uniqueData) === -1) uniqueData.push(el);
        }); // Loop from data filtered post

        for (let j = 0; j < uniqueData.length; j++) {
          // Check base data (main) with post data
          if (uniqueData[j] == baseData) {
            // Display same cate post
            jquery__WEBPACK_IMPORTED_MODULE_0___default()(posts[i]).show();
            break;
          }
        }
      }

      masonryJs.masonryInit();
    });
    this.events();
  }

  events() {}

}

/* harmony default export */ __webpack_exports__["default"] = (CategoryTrigger);

/***/ }),

/***/ "./src/js/modules/Extra.js":
/*!*********************************!*\
  !*** ./src/js/modules/Extra.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

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
    jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).resize(this.setHeightMiniProfileAvatar);
    jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).scroll(this.hideGoToTop);
    this.shareListToggle();
    this.commentsListOptions();
  } // Options of comments list


  commentsListOptions() {
    // Show comments list
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('#button-comments-show-list').on('click', () => {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('#comments-fixed').fadeIn(250);
    }); // Hide comments list

    jquery__WEBPACK_IMPORTED_MODULE_0___default()('#close-comments-fixed').on('click', () => {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('#comments-fixed').fadeOut(250);
    }); // Get url of current page for respond

    let url = window.location.href;

    if (url.indexOf('respond') != -1) {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('#comments-fixed').fadeIn(250);
    }
  }

  scrollSpy() {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('a[href*="#"]:not([href="#"])').on('click', function () {
      // Get hash for create id
      let hash = this.hash; // Select element for move

      jquery__WEBPACK_IMPORTED_MODULE_0___default()('html, body').animate({
        scrollTop: jquery__WEBPACK_IMPORTED_MODULE_0___default()(hash).offset().top
      }, 1000); // Checking specific id

      if (this.id == 'go-down' || this.id == 'go-to-top') {
        // Adding active class
        jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass('active'); // Remove active class with delay (After scrolled)

        setTimeout(() => {
          jquery__WEBPACK_IMPORTED_MODULE_0___default()('#' + this.id).removeClass('active');
        }, 1000);
      }
    });
  }

  setHeightMiniProfileAvatar() {
    let element = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.mini-profile .mini-profile-avatar img');
    let width = jquery__WEBPACK_IMPORTED_MODULE_0___default()(element).width();
    jquery__WEBPACK_IMPORTED_MODULE_0___default()(element).height(width);
  }

  tooltips() {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('[data-toggle="tooltip"]').tooltip();
  } // Hide go to top button


  hideGoToTop() {
    if (jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).scrollTop() > jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).height()) {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('#go-to-top').fadeIn(250);
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('#go-to-top').fadeOut(250);
    }
  } // Toggle of share list


  shareListToggle() {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('#button-share-toggle-list').on('click', () => {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.single-share-list').toggleClass('active');
    });
  }

}

/* harmony default export */ __webpack_exports__["default"] = (Extra);

/***/ }),

/***/ "./src/js/modules/FullscreenSlider.js":
/*!********************************************!*\
  !*** ./src/js/modules/FullscreenSlider.js ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _libs_SwiperJs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./../libs/SwiperJs */ "./src/js/libs/SwiperJs.js");


/* ===============================================================
  Fullscreen image slider
=============================================================== */

class FullscreenSlider {
  constructor() {
    this.fullscreen = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#fullscreen-image-slider');
    this.closeButton = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#fullscreen-close');
    this.openButton = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#projects .post .fullscreen-trigger');
    this.thumbnails = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#projects .post .post-image img');
    this.src = [];
    this.wrapper = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#fullscreen-image-slider .swiper-wrapper');
    this.swiper = new _libs_SwiperJs__WEBPACK_IMPORTED_MODULE_1__["default"]();
    this.addDataCounter();
    this.events();
  }

  events() {
    this.openButton.on('click', e => {
      this.open(); // Initialize slider (Thumbnails)

      this.initSlider(); // Add counter to open button

      this.addDataCounter(); // Initialize swiper

      let counter = jquery__WEBPACK_IMPORTED_MODULE_0___default()(e.currentTarget).attr('data-counter');
      this.swiper.fullscreenSliderInit(counter);
    });
    this.closeButton.on('click', () => {
      this.close();
    });
  }

  initSlider() {
    this.thumbnails.each((index, el) => {
      this.src.push(jquery__WEBPACK_IMPORTED_MODULE_0___default()(el).attr('src'));
    });
    this.thumbnails.each((index, el) => {
      this.wrapper.append(`<div class="swiper-slide"><img src="${this.src[index]}" alt=""></div>`);
    });
  }

  addDataCounter() {
    this.openButton.each((index, el) => {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()(el).attr('data-counter', index);
    });
  }

  open() {
    this.fullscreen.fadeIn(500);
  }

  close() {
    this.fullscreen.fadeOut(500);
  }

}

/* harmony default export */ __webpack_exports__["default"] = (FullscreenSlider);

/***/ }),

/***/ "./src/js/modules/Like.js":
/*!********************************!*\
  !*** ./src/js/modules/Like.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/* ===============================================================
  Like
=============================================================== */

class Like {
  // Initialize
  constructor() {
    this.likeButton = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.like-button');
    const d = new Date();
    this.checkStatusLiked();
    this.events();
  } // Events


  events() {
    this.likeButton.on('click', e => {
      this.ourClickDispatcher(e);
    });
  } // Check status liked (Local storage)


  checkStatusLiked(e) {
    if (this.getCookie('wpIranthemeLiked') == 'liked') {
      this.likeButton.attr('data-exists', 'yes');
    } else {
      this.likeButton.attr('data-exists', 'no');
    }
  } // Click like button dispatcher


  ourClickDispatcher(e) {
    let currentLikeBox = jquery__WEBPACK_IMPORTED_MODULE_0___default()(e.target).closest('.like-button');

    if (currentLikeBox.attr('data-exists') == 'yes') {
      this.deleteLike(currentLikeBox);
    } else {
      this.createLike(currentLikeBox);
    }
  } // Create like


  createLike(currentLikeBox) {
    jquery__WEBPACK_IMPORTED_MODULE_0___default.a.ajax({
      beforeSend: xhr => {
        xhr.setRequestHeader('X-WP-Nonce', wpData.nonce);
      },
      url: wpData.rootUrl + '/wp-json/irantheme/v1/manageLike',
      type: 'POST',
      data: {
        postID: currentLikeBox.attr('data-post')
      },
      success: response => {
        currentLikeBox.attr('data-exists', 'yes');
        let likeCount = parseInt(currentLikeBox.find('.like-count').html(), 10);
        likeCount++;
        currentLikeBox.find('.like-count').html(likeCount);
        currentLikeBox.attr('data-like', response);
        this.setCookie('wpIranthemeLiked', 'liked', 99999999, this.getPath());
        console.log(response);
      },
      error: response => {
        console.log(response);
      }
    });
  } // Delete like


  deleteLike(currentLikeBox) {
    jquery__WEBPACK_IMPORTED_MODULE_0___default.a.ajax({
      beforeSend: xhr => {
        xhr.setRequestHeader('X-WP-Nonce', wpData.nonce);
      },
      url: wpData.rootUrl + '/wp-json/irantheme/v1/manageLike',
      data: {
        like: currentLikeBox.attr('data-like')
      },
      type: 'DELETE',
      success: response => {
        currentLikeBox.attr('data-exists', 'no');
        let likeCount = parseInt(currentLikeBox.find('.like-count').html(), 10);
        likeCount--;
        currentLikeBox.find('.like-count').html(likeCount);
        currentLikeBox.attr('data-like', '');
        this.setCookie('wpIranthemeLiked', '', 99999999, this.getPath());
        console.log(response);
      },
      error: response => {
        console.log(response);
      }
    });
  } // Set cookie


  setCookie(key, value, expireDay, path) {
    const d = new Date();
    d.setTime(d.getTime() + expireDay * 24 * 60 * 60 * 1000);
    let expires = 'expires=' + d.toUTCString();
    document.cookie = key + '=' + value + ';' + expires + ';path=' + path;
  } // Get cookie


  getCookie(key) {
    let name = key + '=';
    let ca = document.cookie.split(';');

    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];

      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }

      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }

    return '';
  } // Get current path


  getPath() {
    let location = window.location.href;
    let directoryPath = location.substring(0, location.lastIndexOf('/') + 1);
    return directoryPath;
  }

}

/* harmony default export */ __webpack_exports__["default"] = (Like);

/***/ }),

/***/ "./src/js/modules/LoadPosts.js":
/*!*************************************!*\
  !*** ./src/js/modules/LoadPosts.js ***!
  \*************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _libs_MasonryJs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../libs/MasonryJs */ "./src/js/libs/MasonryJs.js");
/* harmony import */ var _FullscreenSlider__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./FullscreenSlider */ "./src/js/modules/FullscreenSlider.js");

 // import ParallaxJs from './../libs/ParallaxJs';


/* ===============================================================
  Load Posts
=============================================================== */

class LoadPosts {
  constructor() {
    this.btnLoad = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#loading-projects');
    this.masonryJs = new _libs_MasonryJs__WEBPACK_IMPORTED_MODULE_1__["default"]();
    this.fullscreenSlider;
    this.hideLoadingButton();
    this.events();
  }

  events() {
    // Loading remaining of posts in click load button
    this.btnLoad.on('click', () => {
      this.btnLoad.addClass('active');
      setTimeout(() => {
        this.loadingPosts();
      }, 1000);
      setTimeout(() => {
        this.btnLoad.removeClass('active');
        this.hideLoadingButton();
      }, 1001);
      setTimeout(() => {
        // Initialize fullscreen slider
        this.fullscreenSlider = new _FullscreenSlider__WEBPACK_IMPORTED_MODULE_2__["default"]();
      }, 2000);
    });
  } // Check remaining projects for hiding button load


  hideLoadingButton() {
    // Get current body project length
    jquery__WEBPACK_IMPORTED_MODULE_0___default.a.getJSON(wpData.rootUrl + '/wp-json/json/v1/posts', result => {
      let postCounts = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#projects .post-holder').length; // Get unload posts length

      var postUnloadCount = 0; // Assign length unload post

      postUnloadCount = result.posts.length; // Check count of current post and unload post

      if (postCounts >= postUnloadCount) jquery__WEBPACK_IMPORTED_MODULE_0___default()('.load-more').hide();
    });
  } // Get json data posts


  loadingPosts() {
    // Get json data with api
    jquery__WEBPACK_IMPORTED_MODULE_0___default.a.getJSON(wpData.rootUrl + '/wp-json/json/v1/posts', result => {
      // Temporary posts of result project
      let posts = result.posts; // Get length of body posts

      let currentPostsCount = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#projects .post-holder').length; // Slicing body posts from loaded posts

      posts.splice(0, currentPostsCount); // Divide posts to sliced posts

      posts = posts.splice(0, 6); // Append rest posts

      jquery__WEBPACK_IMPORTED_MODULE_0___default()('#projects .grid-masonry').append(`
          ${posts.map(item => `
              <div class="grid-item post-holder" data-cate="${item.dataCategory}" data-id="${item.id}">
                <article class="post">
                  <a href="${item.permalink}" class="post-link">
                  ${(() => {
        let output = `
                      <div class="post-image">
                        <img src="${item.imageSrc}" alt="تصویر پروژه">
                      </div>
                      <div class="post-content">
                        <div class="post-heading">
                          <h2>${item.title}</h2>
                        ${(() => {
          if (item.category) {
            // Category holder temp
            var cate_temp = ''; // Add parent tag

            cate_temp += '<div class="post-categories">'; // Loop from keys and append to cate temp

            for (let i = 0; i < item.category.length; i++) {
              let key = Object.keys(item.category[i]);
              cate_temp += '<span>' + key + '</span>';
            } // Add ending parent tag


            cate_temp += '</div>';
          }

          return cate_temp;
        })()}
                      </div>
                      </div>
                      `;
        return output;
      })()}
                  <a/>
                  <div class="post-icons fullscreen-trigger">
                    <i class="lni lni-full-screen"></i>
                  </div>
                </article>
              </div>
            `).join('')}
        `);
      this.masonryJs.masonryInit();
    });
  }

}

/* harmony default export */ __webpack_exports__["default"] = (LoadPosts);

/***/ }),

/***/ "./src/js/modules/Navigation.js":
/*!**************************************!*\
  !*** ./src/js/modules/Navigation.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/* ===============================================================
  Nav Options
=============================================================== */

class MainMenu {
  // Initialize
  constructor() {
    this.btnOpen = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#nav-open');
    this.wrapper = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#wrapper');
    this.navigation = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#navigation');
    this.wrapperMask = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#wrapper-mask');
    this.btnClose = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#back-nav');
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
    jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).on('keydown', e => {
      this.keyPressDispatcher(e);
    });
  } // Toggle nav


  open() {
    this.btnOpen.addClass('active');
    this.wrapper.addClass('active');
    this.navigation.addClass('active');
    this.wrapperMask.delay(600).fadeIn();
    this.isOpen = true;
  } // Close nav


  close() {
    this.btnOpen.removeClass('active');
    this.wrapper.removeClass('active');
    this.navigation.removeClass('active');
    this.wrapperMask.fadeOut();
    this.isOpen = false;
  } // Open & close with keypress


  keyPressDispatcher(e) {
    if (e.keyCode == 77 && !this.isOpen && !jquery__WEBPACK_IMPORTED_MODULE_0___default()('input, textarea').is(':focus')) {
      this.open();
    }

    if (e.keyCode == 27 && this.isOpen && !jquery__WEBPACK_IMPORTED_MODULE_0___default()('input, textarea').is(':focus')) {
      this.close();
    }
  }

}

/* harmony default export */ __webpack_exports__["default"] = (MainMenu);

/***/ }),

/***/ "./src/js/modules/Search.js":
/*!**********************************!*\
  !*** ./src/js/modules/Search.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/* ===============================================================
  Search
=============================================================== */

class Search {
  // Initialize
  constructor() {
    this.searchBox = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#search-box');
    this.searchAltButton = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#header-blog .social-networks .search-alt');
    this.searchCloseButton = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#search-box-close');
    this.searchInput = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#search-box .search-input');
    this.spinnerAlt = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#spinner-alt');
    this.searchAlt = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#search-alt');
    this.searchResults = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#search-box .search-results');
    this.events();
    this.timer;
    this.previousSearchInputValue = '';
    this.spinnerStatus = false;
    this.isOpen = false;
  } // Events


  events() {
    // Toggle and close form
    this.searchAltButton.on('click', () => {
      console.log('fs;ldljf');
      this.open();
    });
    this.searchCloseButton.on('click', () => {
      this.close();
    }); // Trigger keypress

    jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).on('keydown', e => {
      this.keyPressDispatcher(e);
    }); // Trigger keyup

    this.searchInput.on('keyup', () => {
      // Get input search input value
      var searchInputValue = this.searchInput.val(); // Check search input value

      if (searchInputValue != this.previousSearchInputValue) {
        clearTimeout(this.timer);

        if (searchInputValue) {
          // Check search input value with previous value & length
          this.enableSpinner(); // Enable spinner

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
    }); // Hide search results

    jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).on('click', e => {
      if (!jquery__WEBPACK_IMPORTED_MODULE_0___default()(e.target).closest('.search-form').length) {
        this.searchResults.hide();
      }
    });
  }

  trigger() {
    this.searchResults.show(); // Get json data with api

    jquery__WEBPACK_IMPORTED_MODULE_0___default.a.getJSON(wpData.rootUrl + '/wp-json/json/v1/search/?term=' + this.searchInput.val(), result => {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.search-results').html(`
          <div class="row">
          ${result.generalInfo.length ? '' : '<div class="search-not-found">نتیجه ای برای کلمات جستجو شده یافت نشد</div>'}
          ${result.generalInfo.map(item => `
                <div class="col-lg-4 col-md-6">
                  <div class="list-post-style list-post-dark">
                    ${item.imageSrc ? `<div class="list-post-style-img">
                      <a href="${item.permalink}">
                        ${item.imageSrc ? '<img src="' + item.imageSrc + '" alt="تصویر پست">' : ''}
                      </a>
                    </div>` : ''}
                    <div class="list-post-style-content">
                      <h3><a href="${item.permalink}">${item.title}</a></h3>
                      <span>${item.date}</span>
                    </div>
                  </div>
                </div>
              `).join('')}
            </div>
        `); // Stop spinner!

      this.disableSpinner();
    });
  } // Open search form


  open() {
    this.searchBox.fadeIn(500);
    this.isOpen = true;
    setTimeout(() => {
      this.searchInput.focus();
    }, 1001);
  } // Close search form


  close() {
    this.searchBox.fadeOut(500);
    this.isOpen = false;
  } // Open & close with keypress


  keyPressDispatcher(e) {
    if (e.keyCode == 83 && !this.isOpen && !jquery__WEBPACK_IMPORTED_MODULE_0___default()('input, textarea').is(':focus')) {
      this.open();
    }

    if (e.keyCode == 27 && this.isOpen) {
      this.close();
    }
  } // Spinner alt active (Rotate)


  enableSpinner() {
    this.searchAlt.hide();
    this.spinnerAlt.show();
  } // Search alt active (Disable rotate spinner)


  disableSpinner() {
    this.searchAlt.show();
    this.spinnerAlt.hide();
  }

}

/* harmony default export */ __webpack_exports__["default"] = (Search);

/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["jQuery"]; }());

/***/ })

/******/ });
//# sourceMappingURL=index.js.map