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

/**
 * Create custom fields for features post type
 * ============================================================================
 * @package WordPress
 * @subpackage irantheme
 * @since irantheme - custom fields
 * @author irantheme corporation
 * ============================================================================
 */

if (!function_exists('irantheme_features_member_add_meta_box')) {
  /**
   * Add meta box
   * @return void
   */
  function irantheme_features_member_add_meta_box()
  {
    //this will add the metabox for the member post type
    $screens = array('feature');

    foreach ($screens as $screen) {

      add_meta_box(
        'member_sectionid',
        __('آیکن خود را انتخاب کنید', 'member_textdomain'),
        'irantheme_features_member_meta_box_callback',
        $screen
      );
    }
  }
  add_action('add_meta_boxes', 'irantheme_features_member_add_meta_box');
}


if (!function_exists('irantheme_features_member_meta_box_callback')) {
  /**
   * Prints the box content.
   *
   * @param WP_Post $post The object for the current post/page.
   * @return void
   */
  function irantheme_features_member_meta_box_callback($post)
  {
    // Add a nonce field so we can check for it later.
    wp_nonce_field('irantheme_features_member_save_meta_box_data', 'member_meta_box_nonce');
    /*
  * Use get_post_meta() to retrieve an existing value
  * from the database and use the value for the form.
  */
    $value = get_post_meta($post->ID, 'features_meta_value_key', true);
    echo '<label for="features_post_icon">';
    _e('آیکن مورد نظر', 'member_textdomain');
    echo '</label> ';
    echo '<select id="features_post_icon" name="features_post_icon">

    <option value="lni-apartment" ' . ($value == 'lni-apartment' ? 'selected' : '') . '>Apartment</option>
    <option value="lni-alarm" ' . ($value == 'lni-alarm' ? 'selected' : '') . '>Alarm</option>
    <option value="lni-ambulance" ' . ($value == 'lni-ambulance' ? 'selected' : '') . '>Ambulance</option>

    <option value="lni-brush" ' . ($value == 'lni-brush' ? 'selected' : '') . '>Brush</option>
    <option value="lni-bar-chart" ' . ($value == 'lni-bar-chart' ? 'selected' : '') . '>Bar Chart</option>
    <option value="lni-bolt" ' . ($value == 'lni-bolt' ? 'selected' : '') . '>Bolt</option>
    <option value="lni-bug" ' . ($value == 'lni-bug' ? 'selected' : '') . '>Bug</option>
    <option value="lni-bullhorn" ' . ($value == 'lni-bullhorn' ? 'selected' : '') . '>Bullhorn</option>
    <option value="lni-bluetooth" ' . ($value == 'lni-bluetooth' ? 'selected' : '') . '>Bluetooth</option>

    <option value="lni-cloud" ' . ($value == 'lni-cloud' ? 'selected' : '') . '>Cloud</option>
    <option value="lni-camera" ' . ($value == 'lni-camera' ? 'selected' : '') . '>Camera</option>
    <option value="lni-cool" ' . ($value == 'lni-cool' ? 'selected' : '') . '>Cool</option>
    <option value="lni-calendar" ' . ($value == 'lni-calendar' ? 'selected' : '') . '>Calendar</option>
    <option value="lni-coffee-cup" ' . ($value == 'lni-coffee-cup' ? 'selected' : '') . '>Coffee Cup</option>
    <option value="lni-checkmark" ' . ($value == 'lni-checkmark' ? 'selected' : '') . '>Checkmark</option>
    <option value="lni-cart" ' . ($value == 'lni-cart' ? 'selected' : '') . '>Cart</option>
    <option value="lni-code" ' . ($value == 'lni-code' ? 'selected' : '') . '>Code</option>
    <option value="lni-calculator" ' . ($value == 'lni-calculator' ? 'selected' : '') . '>Calculator</option>

    <option value="lni-delivery" ' . ($value == 'lni-delivery' ? 'selected' : '') . '>Delivery</option>
    <option value="lni-dollar" ' . ($value == 'lni-dollar' ? 'selected' : '') . '>Dollar</option>
    <option value="lni-display" ' . ($value == 'lni-display' ? 'selected' : '') . '>Display</option>
    <option value="lni-download" ' . ($value == 'lni-download' ? 'selected' : '') . '>Download</option>
    <option value="lni-diamond" ' . ($value == 'lni-diamond' ? 'selected' : '') . '>Diamond</option>
    <option value="lni-database" ' . ($value == 'lni-database' ? 'selected' : '') . '>Database</option>

    <option value="lni-euro" ' . ($value == 'lni-euro' ? 'selected' : '') . '>Euro</option>
    <option value="lni-envelope" ' . ($value == 'lni-envelope' ? 'selected' : '') . '>Envelope</option>

    <option value="lni-first-aid" ' . ($value == 'lni-first-aid' ? 'selected' : '') . '>First Aid</option>
    <option value="lni-fullscreen" ' . ($value == 'lni-fullscreen' ? 'selected' : '') . '>Fullscreen</option>

    <option value="lni-grid-alt" ' . ($value == 'lni-grid-alt' ? 'selected' : '') . '>Grid Alt</option>
    <option value="lni-gallery" ' . ($value == 'lni-gallery' ? 'selected' : '') . '>Gallery</option>
    <option value="lni-grid" ' . ($value == 'lni-grid' ? 'selected' : '') . '>Grid</option>
    <option value="lni-graph" ' . ($value == 'lni-graph' ? 'selected' : '') . '>Graph</option>

    <option value="lni-happy" ' . ($value == 'lni-happy' ? 'selected' : '') . '>Happy</option>
    <option value="lni-hand" ' . ($value == 'lni-hand' ? 'selected' : '') . '>Hand</option>
    <option value="lni-heart" ' . ($value == 'lni-heart' ? 'selected' : '') . '>Heart</option>

    <option value="lni-inbox" ' . ($value == 'lni-inbox' ? 'selected' : '') . '>Inbox</option>

    <option value="lni-keyword-research" ' . ($value == 'lni-keyword-research' ? 'selected' : '') . '>Keyword Research</option>

    <option value="lni-layers" ' . ($value == 'lni-layers' ? 'selected' : '') . '>Layers</option>
    <option value="lni-layout" ' . ($value == 'lni-layout' ? 'selected' : '') . '>Layout</option>
    <option value="lni-lock" ' . ($value == 'lni-lock' ? 'selected' : '') . '>Lock</option>
    <option value="lni-list" ' . ($value == 'lni-list' ? 'selected' : '') . '>List</option>

    <option value="lni-menu" ' . ($value == 'lni-menu' ? 'selected' : '') . '>Menu</option>
    <option value="lni-more" ' . ($value == 'lni-more' ? 'selected' : '') . '>More</option>
    <option value="lni-move" ' . ($value == 'lni-move' ? 'selected' : '') . '>Move</option>

    <option value="lni-network" ' . ($value == 'lni-network' ? 'selected' : '') . '>Network</option>

    <option value="lni-phone" ' . ($value == 'lni-phone' ? 'selected' : '') . '>Phone</option>
    <option value="lni-pencil" ' . ($value == 'lni-pencil' ? 'selected' : '') . '>Pencil</option>
    <option value="lni-pencil-alt" ' . ($value == 'lni-pencil-alt' ? 'selected' : '') . '>Pencil Alt</option>
    <option value="lni-protection" ' . ($value == 'lni-protection' ? 'selected' : '') . '>Protection</option>
    <option value="lni-power-switch" ' . ($value == 'lni-power-switch' ? 'selected' : '') . '>Power Switch</option>

    <option value="lni-quotation" ' . ($value == 'lni-quotation' ? 'selected' : '') . '>Quotation</option>

    <option value="lni-reload" ' . ($value == 'lni-reload' ? 'selected' : '') . '>Reload</option>
    <option value="lni-reply" ' . ($value == 'lni-reply' ? 'selected' : '') . '>Reply</option>
    <option value="lni-rss-feed" ' . ($value == 'lni-rss-feed' ? 'selected' : '') . '>Rss Feed</option>

    <option value="lni-search" ' . ($value == 'lni-search' ? 'selected' : '') . '>Search</option>
    <option value="lni-signal" ' . ($value == 'lni-signal' ? 'selected' : '') . '>Signal</option>
    <option value="lni-support" ' . ($value == 'lni-support' ? 'selected' : '') . '>Support</option>
    <option value="lni-slice" ' . ($value == 'lni-slice' ? 'selected' : '') . '>Slice</option>
    <option value="lni-spinner" ' . ($value == 'lni-spinner' ? 'selected' : '') . '>Spinner</option>
    <option value="lni-seo" ' . ($value == 'lni-seo' ? 'selected' : '') . '>Seo</option>
    <option value="lni-star" ' . ($value == 'lni-star' ? 'selected' : '') . '>Star</option>

    <option value="lni-tag" ' . ($value == 'lni-tag' ? 'selected' : '') . '>Tag</option>

    <option value="lni-unlock" ' . ($value == 'lni-unlock' ? 'selected' : '') . '>Unlock</option>

    <option value="lni-upload" ' . ($value == 'lni-upload' ? 'selected' : '') . '>Upload</option>
    <option value="lni-user" ' . ($value == 'lni-user' ? 'selected' : '') . '>User</option>
    <option value="lni-users" ' . ($value == 'lni-users' ? 'selected' : '') . '>Users</option>

    <option value="lni-video" ' . ($value == 'lni-video' ? 'selected' : '') . '>Video</option>
    <option value="lni-volume" ' . ($value == 'lni-volume' ? 'selected' : '') . '>Volume</option>
    
    <option value="lni-world" ' . ($value == 'lni-world' ? 'selected' : '') . '>World</option>
    
    </select>';
  }
}


if (!function_exists('irantheme_features_member_save_meta_box_data')) {
  /**
   * When the post is saved, saves our custom data.
   *
   * @param int $post_id The ID of the post being saved.
   */
  function irantheme_features_member_save_meta_box_data($post_id)
  {
    if (!isset($_POST['member_meta_box_nonce'])) {
      return;
    }

    if (!wp_verify_nonce($_POST['member_meta_box_nonce'], 'irantheme_features_member_save_meta_box_data')) {
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

    if (!isset($_POST['features_post_icon'])) {
      return;
    }

    $my_data = sanitize_text_field($_POST['features_post_icon']);

    update_post_meta($post_id, 'features_meta_value_key', $my_data);
  }
  add_action('save_post', 'irantheme_features_member_save_meta_box_data');
}


/**
 * Create custom fields for viewpoint post type
 * ============================================================================
 * @package WordPress
 * @subpackage irantheme
 * @since irantheme - custom fields
 * @author irantheme corporation
 * ============================================================================
 */

if (!function_exists('irantheme_viewpoint_member_add_meta_box')) {
  /**
   * Add meta box
   * @return void
   */
  function irantheme_viewpoint_member_add_meta_box()
  {
    //this will add the metabox for the member post type
    $screens = array('viewpoint');

    foreach ($screens as $screen) {

      add_meta_box(
        'member_sectionid',
        __('تخصص یا سمت مشتری یا وارد کنید', 'member_textdomain'),
        'irantheme_viewpoint_member_meta_box_callback',
        $screen
      );
    }
  }
  add_action('add_meta_boxes', 'irantheme_viewpoint_member_add_meta_box');
}


if (!function_exists('irantheme_viewpoint_member_meta_box_callback')) {
  /**
   * Prints the box content.
   *
   * @param WP_Post $post The object for the current post/page.
   * @return void
   */
  function irantheme_viewpoint_member_meta_box_callback($post)
  {
    // Add a nonce field so we can check for it later.
    wp_nonce_field('irantheme_viewpoint_member_save_meta_box_data', 'member_meta_box_nonce');
    /*
  * Use get_post_meta() to retrieve an existing value
  * from the database and use the value for the form.
  */
    $value = get_post_meta($post->ID, 'viewpoint_meta_value_key', true);
    echo '<label for="specialty_or_position">';
    _e('تخصص یا سمت', 'member_textdomain');
    echo '</label> ';
    echo '<input type="text" id="specialty_or_position" name="specialty_or_position" value="' . esc_attr($value) . '" size="25" />';
  }
}


if (!function_exists('irantheme_viewpoint_member_save_meta_box_data')) {
  /**
   * When the post is saved, saves our custom data.
   *
   * @param int $post_id The ID of the post being saved.
   */
  function irantheme_viewpoint_member_save_meta_box_data($post_id)
  {
    if (!isset($_POST['member_meta_box_nonce'])) {
      return;
    }

    if (!wp_verify_nonce($_POST['member_meta_box_nonce'], 'irantheme_viewpoint_member_save_meta_box_data')) {
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

    if (!isset($_POST['specialty_or_position'])) {
      return;
    }

    $my_data = sanitize_text_field($_POST['specialty_or_position']);

    update_post_meta($post_id, 'viewpoint_meta_value_key', $my_data);
  }
  add_action('save_post', 'irantheme_viewpoint_member_save_meta_box_data');
}
