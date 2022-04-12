import $ from 'jquery';
import MasonryJs from './../libs/MasonryJs';
/* ===============================================================
  Category Trigger (Toggle of posts)
=============================================================== */
class CategoryTrigger {
  constructor() {
    let masonryJs = new MasonryJs();
    // Back to all posts
    $('#all-categories').on('click', function () {
      // Remove all active list category
      $('.categories ul li span').removeClass('active');
      // Add active to clicked category
      $(this).addClass('active');
      $('#projects .post-holder[data-cate]').show();
      masonryJs.masonryInit();
    });
    // Categorize and alignment posts
    $('.categories ul li span:not(#all-categories)').on('click', function () {
      // Remove all active list category
      $('.categories ul li span').removeClass('active');
      // Add active to clicked category
      $(this).addClass('active');
      // Remove all posts
      $('#projects .post-holder[data-cate]').hide();
      // Get current category data
      var baseData = $(this).data('cate');
      var posts = $('#projects .post-holder[data-cate]');
      let dataFiltered;
      console.log(posts);
      // Loop from posts
      for (let i = 0; i < posts.length; i++) {
        // Split data post
        let dataPost = $(posts[i]).attr('data-cate').split(',');
        // Remove last additional index array
        dataFiltered = dataPost.filter(function (el) {
          return el != '';
        });
        // Check duplicated data and destroy
        let uniqueData = [];
        $.each(dataFiltered, function (i, el) {
          if ($.inArray(el, uniqueData) === -1) uniqueData.push(el);
        });
        // Loop from data filtered post
        for (let j = 0; j < uniqueData.length; j++) {
          // Check base data (main) with post data
          if (uniqueData[j] == baseData) {
            // Display same cate post
            $(posts[i]).show();
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

export default CategoryTrigger;
