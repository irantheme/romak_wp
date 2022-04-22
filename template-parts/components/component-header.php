<!-- Header -->
<header id="header">

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

  <?php
  $mini_profile_avatar = wp_get_attachment_image_src(get_option('irantheme_mini_profile_avatar'), 'full');
  ?>
  <div class="container-holder">
    <div class="container-fluid">
      <!-- Mini profile -->
      <div class="mini-profile">
        <!-- Avatar -->
        <div class="mini-profile-avatar" data-aos="fade-left">
          <img src="<?php echo esc_attr($mini_profile_avatar[0]); ?>" alt="تصویر پروفایل">
        </div>
        <!-- Content -->
        <div class="mini-profile-content" data-aos="fade-right">
          <!-- Heading -->
          <div class="mini-profile-heading">
            <h1><?php echo __(get_option('irantheme_mini_profile_heading')); ?></h1>
          </div>
          <!-- Description -->
          <div class="mini-profile-description">
            <p><?php echo __(get_option('irantheme_mini_profile_description')); ?></p>
          </div>
          <!-- Social media -->
          <ul class="social-media">
            <?php
            // Get template part of social media
            get_template_part('/template-parts/hooks/hook', 'social-media');
            ?>
          </ul>
          <div class="d-flex justify-content-end">
            <!-- More info profile -->
            <a href="#" class="button-style button-primary">اطلاعات بیشتر<i class="lni lni-chevron-left"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>