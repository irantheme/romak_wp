<?php

if (!function_exists('irantheme_register_post_types')) {
  /**
   * Register post types
   * @return void
   */
  function irantheme_register_post_types()
  {

    // Register project post type
    register_post_type('project', array(
      'public' => true,
      'map_meta_cap' => true,
      'show_in_rest' => true,
      // 'publicly_queryable' => true,
      // 'show_ui'            => true,
      // 'show_in_menu'       => true,
      // 'query_var'          => true,
      'rewrite'            => array('slug' => 'projects'),
      // 'capability_type'    => 'project',
      'has_archive'        => true,
      // 'hierarchical'       => false,
      // 'menu_position'      => null,
      'supports'           => array('title', 'editor', 'thumbnail', 'comments'),
      'taxonomies' => array('category', 'post_tag'),
      'labels' => array(
        'name' => 'پروژه ها',
        'add_new_item' => 'پروژه جدید',
        'edit_item' => 'ویرایش پروژه',
        'all_items' => 'همه پروژه ها',
        'singular_name' => 'پروژه'
      ),
      'menu_icon' => 'dashicons-schedule'
    ));

    // Register feature post type
    register_post_type('feature', array(
      'supports' => array('title', 'editor'),
      'public' => false,
      'show_ui' => true,
      'labels' => array(
        'name' => 'ویژگی ها',
        'add_new_item' => 'ویژگی جدید',
        'edit_item' => 'ویرایش ویژگی',
        'all_items' => 'همه ویژگی ها',
        'singular_name' => 'ویژگی'
      ),
      'menu_icon' => 'dashicons-screenoptions'
    ));

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

    // Register viewpoint post type
    register_post_type('viewpoint', array(
      'supports' => array('title', 'editor'),
      'public' => false,
      'show_ui' => true,
      'labels' => array(
        'name' => 'دیدگاه مشتریان',
        'add_new_item' => 'دیدگاه جدید',
        'edit_item' => 'ویرایش دیدگاه',
        'all_items' => 'همه دیدگاه مشتریان',
        'singular_name' => 'دیدگاه مشتریان',
      ),
      'menu_icon' => 'dashicons-format-quote'
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
