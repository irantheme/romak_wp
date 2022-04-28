<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php wp_head(); ?>
</head>

<body id="top">

  <?php
  // Get template part of navigation
  get_template_part('/template-parts/utils/util', 'navigation');
  ?>

  <!-- Wrapper -->
  <div id="wrapper">
    <!-- Wrapper mask -->
    <div id="wrapper-mask"></div>

    <?php
    // Get template part of header
    get_template_part('/template-parts/headers/header', 'front');
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

    <?php
    // Get template part of Partners
    get_template_part('/template-parts/contacts/contact', 'dark-simple');
    ?>

    <?php
    // Get template part of footer
    get_template_part('/template-parts/footers/footer', 'white-simple');
    ?>

  </div>

  <?php wp_footer(); ?>
</body>

</html>