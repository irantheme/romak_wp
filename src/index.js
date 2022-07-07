import './css/main.scss';

// Libs
import MasonryJs from './js/libs/MasonryJs';
import Swiper from './js/libs/SwiperJs';
import JarallaxJs from './js/libs/JarallaxJs';
import AosJs from './js/libs/AosJs';

// Modules
import Extra from './js/modules/Extra';
import Search from './js/modules/Search';
import Navigation from './js/modules/Navigation';
import LoadPosts from './js/modules/LoadPosts';
import Like from './js/modules/Like';

// Hooks
import FullscreenSlider from './js/modules/FullscreenSlider';

// Init objects
let navigation = new Navigation();
let extra = new Extra();
let search = new Search();
let loadPosts = new LoadPosts();
let masonryJs = new MasonryJs();
let swiper = new Swiper();
let like = new Like();
let jarallax = new JarallaxJs();
let fullscreenSlider = new FullscreenSlider();
let aosJs = new AosJs();
