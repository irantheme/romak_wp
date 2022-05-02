<?php

if (!function_exists('irantheme_add_theme_sources')) {
  /**
   * Add theme file sources
   * @return void
   */
  function irantheme_add_theme_sources()
  {
    // Adding javascript files =======================================================
    // Adding jquery js
    wp_enqueue_script('jquery-irantheme-js', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array('jquery'), '3.5.1', true);
    // Adding jarallax js
    wp_enqueue_script('jarallax-irantheme-js', get_template_directory_uri() . '/assets/js/jarallax.min.js', NULL, '2.0.2', true);
    // Adding bootstrap bundle js
    wp_enqueue_script('bootstrap-bundle-irantheme-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', NULL, '4.6.1', true);
    // Adding swiper js
    wp_enqueue_script('swiper-irantheme-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', NULL, '6.8.0', true);
    // Adding aos js
    wp_enqueue_script('aos-irantheme-js', get_template_directory_uri() . '/assets/js/aos.js', NULL, '1.0', true);
    // Adding masonry js
    wp_enqueue_script('masonry-irantheme-js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', NULL, '1.0', true);
    // Adding images loaded js
    wp_enqueue_script('images-loaded-irantheme-js', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', NULL, '1.0', true);
    // Adding main js
    wp_enqueue_script('main-irantheme-js', get_template_directory_uri() . '/build/index.js', array('jquery-irantheme-js'), '1.0', true);
    // Adding stylesheet files ======================================================
    // Adding fonts css
    wp_enqueue_style('fonts-irantheme-css', get_template_directory_uri() . '/assets/css/fonts.css');
    // Adding Line icons css
    wp_enqueue_style('line-icons-irantheme-css', get_template_directory_uri() . '/assets/css/lineicons.css');
    // Adding Themify icons css
    wp_enqueue_style('themify-icons-irantheme-css', get_template_directory_uri() . '/assets/css/themify-icons.css');
    // Adding bootstrap css
    wp_enqueue_style('bootstrap-irantheme-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    // Adding swiper css
    wp_enqueue_style('swiper-irantheme-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    // Adding aos css
    wp_enqueue_style('aos-irantheme-css', get_template_directory_uri() . '/assets/css/aos.css');
    // Adding style sheet (main)
    wp_enqueue_style('main-irantheme-css', get_template_directory_uri() . '/build/index.css');
    // wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Access to wordpress features with custom script js
    $front_header_bg = wp_get_attachment_image_src(get_option('irantheme_front_header_bg'), 'full');
    $front_partners_bg = wp_get_attachment_image_src(get_option('irantheme_front_partners_bg'), 'full');
    $blog_header_bg = wp_get_attachment_image_src(get_option('irantheme_blog_header_bg'), 'full');
    wp_localize_script('main-irantheme-js', 'wpData', array(
      'rootUrl' => get_site_url(),
      'nonce' => wp_create_nonce('wp_rest'),
      'frontHeaderBg' => esc_url($front_header_bg[0]),
      'frontPartnersBg' => esc_url($front_partners_bg[0]),
      'BlogHeaderBg' => esc_url($blog_header_bg[0]),
    ));
  }
  add_action('wp_enqueue_scripts', 'irantheme_add_theme_sources');
}


if (!function_exists('irantheme_add_admin_files')) {
  /**
   * Admin source files
   * @return void
   */
  function irantheme_add_admin_files()
  {
    // We're including the farbtastic script & styles here because they're needed for the colour picker
    // If you're not including a colour picker field then you can leave these calls out as well as the farbtastic dependency for the wpt-admin-js script below
    wp_enqueue_style('farbtastic');
    wp_enqueue_script('farbtastic');
    // We're including the WP media scripts here because they're needed for the image upload field
    // If you're not including an image upload then you can leave this function call out
    wp_enqueue_media();
    // Admin css
    wp_register_style('admin-css', get_template_directory_uri() . '/assets/css/admin.css', array(), '1.0.0', 'all');
    wp_enqueue_style('admin-css');
    // Admin js
    wp_register_script('admin-script', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('admin-script');
  }
  add_action('admin_enqueue_scripts', 'irantheme_add_admin_files');
}
