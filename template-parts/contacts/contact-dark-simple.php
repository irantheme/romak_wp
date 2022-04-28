<!-- Contact dark simple -->
<section id="contact-dark-simple">
  <div class="container-holder">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" data-aos="fade-left">
          <!-- Heading mode -->
          <div class="heading-mode heading-mode-light m-0">
            <h2><?php echo esc_html__(get_option('irantheme_front_contact_title')); ?></h2>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-right">
          <?php if (get_option('irantheme_front_contact_text_button')) : ?>
            <!-- Button style -->
            <a href="<?php echo esc_url(get_option('irantheme_front_contact_link_button')); ?>" class="button-simple button-primary"><?php echo __(get_option('irantheme_front_contact_text_button')); ?></a>
          <?php endif; ?>
        </div>
      </div>
      <!-- Mini menu -->
      <div class="mini-menu" data-aos="fade-up">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'contactMiniMenu',
          'depth' => 1,
        ));
        ?>
      </div>
    </div>
  </div>
</section>