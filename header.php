<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>

  <?php
  // Get template part of navigation
  get_template_part('/template-parts/hooks/hook', 'navigation');
  ?>

  <!-- Wrapper -->
  <div id="wrapper">
    <!-- Wrapper mask -->
    <div id="wrapper-mask"></div>

    <?php
    // Get template part of header blog
    get_template_part('/template-parts/components/component', 'header-blog');
    ?>

    <?php
    // Get template part of search box
    get_template_part('/template-parts/hooks/hook', 'search-box');
    ?>