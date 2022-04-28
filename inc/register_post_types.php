<?php

if (!function_exists('irantheme_register_post_types')) {
  /**
   * Register post types
   * @return void
   */
  function irantheme_register_post_types()
  {
    // Register partner post type
    register_post_type('partner', array(
      'supports' => array('title', 'thumbnail'),
      'public' => false,
      'show_ui' => true,
      'labels' => array(
        'name' => 'همکاران',
        'add_new_item' => 'همکار جدید',
        'edit_item' => 'ویرایش همکار',
        'all_items' => 'همه همکاران',
        'singular_name' => 'همکاران',
        'featured_image'        => 'لوگوی همکار',
        'set_featured_image'    => 'انتخاب یا آپلود لوگو',
        'remove_featured_image' => 'حذف لوگو',
        'use_featured_image'    => 'استفاده از لوگو',
      ),
      'menu_icon' => 'dashicons-groups'
    ));

    // Register like post type
    register_post_type('like', array(
      'supports' => array('title'),
      'public' => false,
      'show_ui' => true,
      'labels' => array(
        'name' => 'لایک ها',
        'add_new_item' => 'لایک جدید',
        'edit_item' => 'ویرایش لایک',
        'all_items' => 'همه لایک ها',
        'singular_name' => 'لایک'
      ),
      'menu_icon' => 'dashicons-heart'
    ));
  }
  add_action('init', 'irantheme_register_post_types');
}
