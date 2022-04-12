<!-- About -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6" data-aos="fade-left">
        <!-- About content -->
        <aside class="about-content">
          <q><?php echo esc_html__(get_option('irantheme_front_about_little_title')); ?></q>
          <h3><?php echo esc_html__(get_option('irantheme_front_about_title')); ?></h3>
          <p><?php echo esc_html__(get_option('irantheme_front_about_description')); ?></p>
          <blockquote><?php echo esc_html__(get_option('irantheme_front_about_long_description')); ?></blockquote>
          <a href="<?php echo esc_url(get_option('irantheme_about_link')); ?>" class="button-style button-primary">بیشتر<i class="lni lni-chevron-left"></i></a>
        </aside>
      </div>
      <div class="col-lg-6" data-aos="fade-right">
        <?php
        $front_about_img_1 = wp_get_attachment_image_src(get_option('irantheme_front_about_img_1'), 'full');
        $front_about_img_2 = wp_get_attachment_image_src(get_option('irantheme_front_about_img_2'), 'full');
        $front_about_img_3 = wp_get_attachment_image_src(get_option('irantheme_front_about_img_3'), 'full');
        ?>
        <!-- About list image -->
        <aside class="about-list-image">
          <ul>
            <?php if ($front_about_img_1) : ?>
              <li><img src="<?php echo esc_url($front_about_img_1[0]); ?>" alt="تصویر اول" /></li>
            <?php endif; ?>
            <?php if ($front_about_img_2) : ?>
              <li><img src="<?php echo esc_url($front_about_img_2[0]); ?>" alt="تصویر دوم" /></li>
            <?php endif; ?>
            <?php if ($front_about_img_3) : ?>
              <li><img src="<?php echo esc_url($front_about_img_3[0]); ?>" alt="تصویر سوم" /></li>
            <?php endif; ?>
          </ul>
        </aside>
      </div>
    </div>
  </div>
</section>