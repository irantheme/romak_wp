<?php
$mini_profile_avatar = wp_get_attachment_image_src(get_option('irantheme_mini_profile_avatar'), 'full');
?>

<div class="container-holder">
  <div class="container-fluid">
    <!-- Mini profile -->
    <div class="mini-profile" data-aos="fade-down">
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
      <!-- Social media -->
      <ul class="social-media-footer">
        <?php
        // Get template part of social media
        get_template_part('/template-parts/utils/util', 'social-media');
        ?>
      </ul>
    </div>
  </div>
</div>