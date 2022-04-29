<?php get_header(); ?>

<?php
// Get template part of header
get_template_part('/template-parts/components/component', 'mini-profile');
?>

<?php
// Get template part of posts
get_template_part('/template-parts/posts/post', 'posts');
?>

<?php
// Get template part of fullscreen image slider
get_template_part('/template-parts/utils/util', 'fullscreen-image-slider');
?>

<?php
// Get template part of Partners
get_template_part('/template-parts/posts/post', 'partners');
?>

<?php get_footer(); ?>