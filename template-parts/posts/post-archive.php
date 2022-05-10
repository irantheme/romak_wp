<?php
if (have_posts()) : ?>

  <!-- Box style posts -->
  <div class="box-style-posts">
    <!-- Heading mode -->
    <div class="heading-mode heading-mode-dark" data-aos="fade-down">
      <h2><?php echo get_the_archive_title(); ?></h2>
    </div>
    <div class="row">
      <?php
      while (have_posts()) : the_post(); ?>
        <!-- Item -->
        <div class="col-lg-3" data-aos="fade-down">
          <div class="box-style-item">
            <?php if (has_post_thumbnail()) : ?>
              <!-- Post image -->
              <div class="box-style-image-space">
                <a href="<?php echo get_the_permalink(); ?>" class="box-style-image-link">
                  <!-- Post thumbnail -->
                  <div class="box-style-thumbnail-space">
                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="تصویر مطلب">
                  </div>
                </a>
              </div>
            <?php endif; ?>
            <!-- Holder -->
            <div class="box-style-content-space text-right">
              <!-- Heading -->
              <div class="box-style-heading-space">
                <!-- Date -->
                <span><i class="lni lni-calendar"></i><?php echo get_the_date('j F Y'); ?></span>
                <h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
              </div>
              <?php
              // Counter of like
              $likeCountRel = new WP_Query(array(
                'post_type' => 'like',
                'meta_query' => array(
                  array(
                    'key' => 'liked_meta_value_key',
                    'compare' => '=',
                    'value' => get_the_ID()
                  )
                )
              ));
              ?>
              <!-- Comments & Likes -->
              <div class="box-style-list-options">
                <span><i class="lni lni-comments"></i><?php echo get_comments_number(); ?> دیدگاه</span>
                <span><i class="lni lni-heart"></i><?php echo esc_html__($likeCountRel->found_posts); ?> پسندشده</span>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
<?php
endif;
?>