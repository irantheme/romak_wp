<?php


if (!function_exists('irantheme_like_routes')) {
  /**
   * Create like route
   * @return void
   */
  function irantheme_like_routes()
  {
    register_rest_route('irantheme/v1', 'manageLike', array(
      'methods' => 'POST',
      'callback' => 'irantheme_create_like'
    ));

    register_rest_route('irantheme/v1', 'manageLike', array(
      'methods' => 'DELETE',
      'callback' => 'irantheme_delete_like'
    ));
  }
  add_action('rest_api_init', 'irantheme_like_routes');
}


if (!function_exists('irantheme_create_like')) {
  /**
   * Create like (Increase)
   * @return Wp_post_like
   */
  function irantheme_create_like($data)
  {
    $postID = sanitize_text_field($data['postID']);

    // Exist query
    $existQuery = new WP_Query(array(
      'post_type' => 'like',
      'meta_query' => array(
        array(
          'key' => 'liked_meta_value_key',
          'compare' => '=',
          'value' => $postID
        )
      )
    ));

    if (get_post_type($postID) == 'post' || get_post_type($postID) == 'project') {
      return wp_insert_post(array(
        'post_type' => 'like',
        'post_status' => 'publish',
        'post_title' => get_the_title($postID),
        'meta_input' => array(
          'liked_meta_value_key' => $postID
        )
      ));
    } else {
      die('Invalid Post Type');
    }
  }
}


if (!function_exists('irantheme_delete_like')) {
  /**
   * Delete like (Decrease)
   * @return string
   */
  function irantheme_delete_like($data)
  {
    $likeID = sanitize_text_field($data['like']);
    if (get_post_type($likeID) == 'like') {
      wp_delete_post($likeID, true);
      return 'Congrats, like deleted.';
    } else {
      die('You do not have permission to delete that.');
    }
  }
}
