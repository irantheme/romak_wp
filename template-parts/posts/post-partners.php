<?php
$front_post_partners = new WP_Query(array(
  'post_type' => 'partner',
  'posts_per_page' => -1,
));
?>

<?php if ($front_post_partners->have_posts() || $front_post_viewpoint->have_posts()) : ?>
  <!-- Partners -->
  <section id="partners">

    <div class="container-holder">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <!-- Heading mode -->
            <div class="heading-mode heading-mode-dark text-center" data-aos="fade-down">
              <h2><?php echo esc_html__(get_option('irantheme_front_partners_title')); ?></h2>
              <p><?php echo esc_html__(get_option('irantheme_front_partners_description')); ?></p>
            </div>
          </div>
        </div>

        <?php if ($front_post_partners->have_posts()) : ?>
          <!-- Partners brands -->
          <div class="partners-brands" data-aos="fade-down">
            <div class="row justify-content-center">
              <?php while ($front_post_partners->have_posts()) : $front_post_partners->the_post(); ?>
                <div class="col-lg-3">
                  <!-- Partner item -->
                  <div class="partner-item">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" />
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>

  </section>
<?php endif; ?>