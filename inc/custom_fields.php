<?php

/**
 * Create custom fields for like post type
 * ============================================================================
 * @package WordPress
 * @subpackage irantheme
 * @since irantheme - custom fields
 * @author irantheme corporation
 * ============================================================================
 */

if (!function_exists('irantheme_like_member_add_meta_box')) {
  /**
   * Add meta box
   * @return void
   */
  function irantheme_like_member_add_meta_box()
  {
    //this will add the metabox for the member post type
    $screens = array('like');

    foreach ($screens as $screen) {

      add_meta_box(
        'member_sectionid',
        __('شناسه مطلب لایک شده', 'member_textdomain'),
        'irantheme_like_member_meta_box_callback',
        $screen
      );
    }
  }
  add_action('add_meta_boxes', 'irantheme_like_member_add_meta_box');
}


if (!function_exists('irantheme_like_member_meta_box_callback')) {
  /**
   * Prints the box content.
   *
   * @param WP_Post $post The object for the current post/page.
   * @return void
   */
  function irantheme_like_member_meta_box_callback($post)
  {
    // Add a nonce field so we can check for it later.
    wp_nonce_field('irantheme_like_member_save_meta_box_data', 'member_meta_box_nonce');
    /*
  * Use get_post_meta() to retrieve an existing value
  * from the database and use the value for the form.
  */
    $value = get_post_meta($post->ID, 'liked_meta_value_key', true);
    echo '<label for="liked_post_id">';
    _e('شناسه مطلب', 'member_textdomain');
    echo '</label> ';
    echo '<input type="text" id="liked_post_id" name="liked_post_id" value="' . esc_attr($value) . '" size="25" />';
  }
}


if (!function_exists('irantheme_like_member_save_meta_box_data')) {
  /**
   * When the post is saved, saves our custom data.
   *
   * @param int $post_id The ID of the post being saved.
   */
  function irantheme_like_member_save_meta_box_data($post_id)
  {
    if (!isset($_POST['member_meta_box_nonce'])) {
      return;
    }

    if (!wp_verify_nonce($_POST['member_meta_box_nonce'], 'irantheme_like_member_save_meta_box_data')) {
      return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
    }

    // Check the user's permissions.
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {

      if (!current_user_can('edit_page', $post_id)) {
        return;
      }
    } else {

      if (!current_user_can('edit_post', $post_id)) {
        return;
      }
    }

    if (!isset($_POST['liked_post_id'])) {
      return;
    }

    $my_data = sanitize_text_field($_POST['liked_post_id']);

    update_post_meta($post_id, 'liked_meta_value_key', $my_data);
  }
  add_action('save_post', 'irantheme_like_member_save_meta_box_data');
}
