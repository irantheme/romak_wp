import $ from 'jquery';
/* ===============================================================
  Like
=============================================================== */
class Like {
  // Initialize
  constructor() {
    this.likeButton = $('.like-button');
    const d = new Date();
    this.checkStatusLiked();
    this.events();
  }

  // Events
  events() {
    this.likeButton.on('click', (e) => {
      this.ourClickDispatcher(e);
    });
  }

  // Check status liked (Local storage)
  checkStatusLiked(e) {
    if (this.getCookie('wpIranthemeLiked') == 'liked') {
      this.likeButton.attr('data-exists', 'yes');
    } else {
      this.likeButton.attr('data-exists', 'no');
    }
  }

  // Click like button dispatcher
  ourClickDispatcher(e) {
    let currentLikeBox = $(e.target).closest('.like-button');
    if (currentLikeBox.attr('data-exists') == 'yes') {
      this.deleteLike(currentLikeBox);
    } else {
      this.createLike(currentLikeBox);
    }
  }

  // Create like
  createLike(currentLikeBox) {
    $.ajax({
      beforeSend: (xhr) => {
        xhr.setRequestHeader('X-WP-Nonce', wpData.nonce);
      },
      url: wpData.rootUrl + '/wp-json/irantheme/v1/manageLike',
      type: 'POST',
      data: { postID: currentLikeBox.attr('data-post') },
      success: (response) => {
        currentLikeBox.attr('data-exists', 'yes');
        let likeCount = parseInt(currentLikeBox.find('.like-count').html(), 10);
        likeCount++;
        currentLikeBox.find('.like-count').html(likeCount);
        currentLikeBox.attr('data-like', response);
        this.setCookie('wpIranthemeLiked', 'liked', 99999999, this.getPath());
        console.log(response);
      },
      error: (response) => {
        console.log(response);
      },
    });
  }

  // Delete like
  deleteLike(currentLikeBox) {
    $.ajax({
      beforeSend: (xhr) => {
        xhr.setRequestHeader('X-WP-Nonce', wpData.nonce);
      },
      url: wpData.rootUrl + '/wp-json/irantheme/v1/manageLike',
      data: { like: currentLikeBox.attr('data-like') },
      type: 'DELETE',
      success: (response) => {
        currentLikeBox.attr('data-exists', 'no');
        let likeCount = parseInt(currentLikeBox.find('.like-count').html(), 10);
        likeCount--;
        currentLikeBox.find('.like-count').html(likeCount);
        currentLikeBox.attr('data-like', '');
        this.setCookie('wpIranthemeLiked', '', 99999999, this.getPath());
        console.log(response);
      },
      error: (response) => {
        console.log(response);
      },
    });
  }

  // Set cookie
  setCookie(key, value, expireDay, path) {
    const d = new Date();
    d.setTime(d.getTime() + expireDay * 24 * 60 * 60 * 1000);
    let expires = 'expires=' + d.toUTCString();
    document.cookie = key + '=' + value + ';' + expires + ';path=' + path;
  }

  // Get cookie
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
  }

  // Get current path
  getPath() {
    let location = window.location.href;
    let directoryPath = location.substring(0, location.lastIndexOf('/') + 1);
    return directoryPath;
  }
}

export default Like;
