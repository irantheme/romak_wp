<!-- Header -->
<header id="header">
  <div class="dark-mask"></div>

  <div id="parallax-front-header" class="parallax-container jarallax">
    <div class="container-fluid p-0">
      <!-- Main menu -->
      <div class="main-menu">
        <button id="nav-open">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
    <div class="container">
      <!-- Banner -->
      <div class="banner" data-aos="fade-up">
        <h2><?php echo esc_html__(get_option('irantheme_front_header_title')); ?></h2>
        <p><?php echo esc_html__(get_option('irantheme_front_header_description')); ?></p>
        <a href="#features" id="go-down" class="button-style button-light">شروع کنید<i class="lni lni-chevron-left"></i></a>
      </div>
    </div>
    <!-- Social media -->
    <div class="social-media">
      <ul>
        <?php
        // Get template part of social media
        get_template_part('/template-parts/hooks/hook', 'social-media');
        ?>
      </ul>
    </div>
  </div>
</header>