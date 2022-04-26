<!-- Header -->
<header id="header">

  <div class="container-holder">
    <div class="container-fluid">
      <!-- Main menu -->
      <div class="main-menu">

        <?php if (has_custom_logo()) : ?>
          <!-- Logo -->
          <div class="logo">
            <?php echo get_custom_logo(); ?>
          </div>
        <?php endif; ?>

        <!-- Open nav -->
        <button id="nav-open" class="dark">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
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
        <div class="mini-profile-avatar">
          <img src="<?php echo $mini_profile_avatar[0]; ?>" alt="<?php echo get_option('irantheme_mini_profile_name'); ?>">
        </div>
        <!-- Name -->
        <div class="mini-profile-name">
          <?php echo get_option('irantheme_mini_profile_heading'); ?>
        </div>
        <!-- Description -->
        <div class="mini-profile-description">
          <?php echo get_option('irantheme_mini_profile_description'); ?>
        </div>
      </div>
    </div>
  </div>
</header>