<?php

// Adding source files essentials
require get_theme_file_path('/inc/source_files.php');
// Adding custom settings admin page
require get_theme_file_path('/inc/custom_admin_settings.php');
// Adding additional & features
require get_theme_file_path('/inc/additional_features.php');
// Adding register post route
require get_theme_file_path('/inc/post_route.php');
// Adding register like route
require get_theme_file_path('/inc/like_route.php');
// Adding register post types
require get_theme_file_path('/inc/register_post_types.php');
// Adding custom fields
require get_theme_file_path('/inc/custom_fields.php');

$settings = new Irantheme_WordPress_Custom_Admin_Settings('تنظیمات قالب', 'irantheme', __FILE__, 'irantheme');
