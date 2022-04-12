<?php
$front_feature_posts = new WP_Query(array(
  'post_type' => 'feature',
  'posts_per_page' => -1,
));
?>

<?php if ($front_feature_posts->have_posts()) : ?>
  <!-- Features -->
  <section id="features">
    <div class="container">
      <!-- Heading mode -->
      <div class="heading-mode heading-mode-light text-center" data-aos="fade-down">
        <h2><?php echo esc_html__(get_option('irantheme_front_features_title')); ?></h2>
        <p><?php echo esc_html__(get_option('irantheme_front_features_description')); ?></p>
      </div>
      <div class="row">
        <?php
        while ($front_feature_posts->have_posts()) :
          $front_feature_posts->the_post();
          $feature_icon = get_post_meta(get_the_ID(), 'features_meta_value_key', true);
        ?>
          <!-- Feature box -->
          <div class="col-lg-4" data-aos="fade-up">
            <aside class="feature-box">
              <div class="feature-icon"><i class="lni <?php echo esc_html__($feature_icon); ?>"></i></div>
              <div class="feature-content">
                <h3><?php echo get_the_title(); ?></h3>
                <p><?php echo sanitize_text_field(get_the_content()); ?></p>
              </div>
            </aside>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>