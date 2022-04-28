import $ from 'jquery';
import MasonryJs from '../libs/MasonryJs';
// import ParallaxJs from './../libs/ParallaxJs';
import FullscreenSlider from './FullscreenSlider';
/* ===============================================================
  Load Posts
=============================================================== */
class LoadPosts {
  constructor() {
    this.btnLoad = $('#loading-projects');
    this.masonryJs = new MasonryJs();
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
        this.fullscreenSlider = new FullscreenSlider();
      }, 2000);
    });
  }

  // Check remaining projects for hiding button load
  hideLoadingButton() {
    // Get current body project length
    $.getJSON(wpData.rootUrl + '/wp-json/json/v1/posts', (result) => {
      let postCounts = $('#projects .post-holder').length;
      // Get unload posts length
      var postUnloadCount = 0;
      // Assign length unload post
      postUnloadCount = result.posts.length;
      // Check count of current post and unload post
      if (postCounts >= postUnloadCount) $('.load-more').hide();
    });
  }

  // Get json data posts
  loadingPosts() {
    // Get json data with api
    $.getJSON(wpData.rootUrl + '/wp-json/json/v1/posts', (result) => {
      // Temporary posts of result project
      let posts = result.posts;
      // Get length of body posts
      let currentPostsCount = $('#projects .post-holder').length;
      // Slicing body posts from loaded posts
      posts.splice(0, currentPostsCount);
      // Divide posts to sliced posts
      posts = posts.splice(0, 6);
      // Append rest posts
      $('#projects .grid-masonry').append(`
          ${posts
            .map(
              (item) => `
              <div class="grid-item post-holder" data-cate="${
                item.dataCategory
              }" data-id="${item.id}">
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
                            var cate_temp = '';
                            // Add parent tag
                            cate_temp += '<div class="post-categories">';
                            // Loop from keys and append to cate temp
                            for (let i = 0; i < item.category.length; i++) {
                              let key = Object.keys(item.category[i]);
                              cate_temp += '<span>' + key + '</span>';
                            }
                            // Add ending parent tag
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
            `
            )
            .join('')}
        `);
      this.masonryJs.masonryInit();
    });
  }
}

export default LoadPosts;
