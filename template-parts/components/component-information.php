<!-- Information -->
<section id="information">
  <div class="container">
    <div class="row">
      <div class="col-lg-4" data-aos="fade-up">
        <!-- Email -->
        <div class="info-item">
          <a href="mail:<?php echo esc_html__(get_option('irantheme_general_email')); ?>"><i class="lni lni-envelope"></i></a>
          <div>
            <cite>ایمیل</cite>
            <span><?php echo esc_html__(get_option('irantheme_general_email')); ?></span>
          </div>
        </div>
      </div>
      <div class="col-lg-4" data-aos="fade-up">
        <!-- Phone -->
        <div class="info-item">
          <a href="tel:<?php echo esc_html__(get_option('irantheme_general_telephone')); ?>"><i class="lni lni-phone"></i></a>
          <div>
            <cite>تلفن</cite>
            <span><?php echo esc_html__(get_option('irantheme_general_telephone')); ?></span>
          </div>
        </div>
      </div>
      <div class="col-lg-4" data-aos="fade-up">
        <!-- Address -->
        <div class="info-item">
          <i class="lni lni-map-marker"></i>
          <div>
            <cite>آدرس</cite>
            <span><?php echo esc_html__(get_option('irantheme_general_address')); ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>