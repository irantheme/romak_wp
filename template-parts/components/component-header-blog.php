<!-- Header blog -->
<header id="header-blog">

  <div class="container-fluid p-0">
    <!-- Main menu -->
    <div class="main-menu">
      <button id="nav-open" class="dark">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
  <div class="container-holder">
    <div class="container-fluid">
      <!-- Heading info -->
      <div class="heading-info">
        <!-- Breadcrumbs -->
        <?php irantheme_custom_breadcrumbs(); ?>
        <!-- Main info -->
        <?php
        $args = array();
        // Check title, subtitle
        if (is_home()) {
          $args['title'] = 'وبلاگ';
          $args['subtitle'] = 'آخرین مطالب ما را در این صفحه مشاهده می کنید.';
          $args['link'] = null;
        } else if (is_author()) {
          $author = get_user_by('slug', get_query_var('author_name'));
          $args['title'] = get_the_archive_title();
          $args['subtitle'] = esc_html__($author->nickname);
          $args['link'] = null;
        } else if (is_archive()) {
          $args['title'] = get_the_archive_title();
          $args['subtitle'] = get_the_archive_description();
          $args['link'] = null;
        } else if (is_single() || is_page()) {
          $args['title'] = get_the_title();
          $args['subtitle'] = wp_trim_words(strip_shortcodes(get_the_content()), 10);
          $args['link'] = null;
        } else if (is_404()) {
          $args['title'] = 'ارور ۴۰۴';
          $args['subtitle'] = 'صفحه مورد نظر پیدا نشد.';
          $args['link'] = null;
        } else {
          $args['title'] = 'ناشناخته';
          $args['subtitle'] = 'ناشناخته';
          $args['link'] = null;
        }
        ?>
        <div class="heading-main-info">
          <?php if ($args['link']) : ?>
            <h1><a href="<?php echo esc_url($args['link']); ?>"><?php echo esc_html__($args['title']); ?></a></h1>
          <?php else : ?>
            <h1><?php echo __($args['title']); ?></h1>
          <?php endif; ?>
          <p><?php echo __($args['subtitle']); ?></p>
        </div>
      </div>
    </div>
  </div>
</header>