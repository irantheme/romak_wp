<?php
$orig_post = $post;
global $post;
$related_category = get_the_category($post->ID);
if ($related_category) :
  $category_ids = array();
  foreach ($related_category as $individual_category) {
    $category_ids[] = $individual_category->term_id;
  }

  $args = array(
    'post_type' => array('post', 'project'),
    'category__in' => $category_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page' => 4,
    'ignore_sticky_posts' => 1
  );
  $my_query = new WP_Query($args);

  if ($my_query->have_posts()) : ?>
    <!-- Related posts -->
    <div class="related-post">
      <!-- Swiper -->
      <div class="swiper related-post-slider">
        <div class="swiper-wrapper">
          <?php
          while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <!-- Item -->
            <div class="swiper-slide">
              <div class="post-box-space">
                <?php if (has_post_thumbnail()) : ?>
                  <!-- Post image -->
                  <div class="post-image-space">
                    <a href="<?php echo get_the_permalink(); ?>" class="post-image-link">
                      <!-- Post thumbnail -->
                      <div class="post-thumbnail-space">
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="تصویر مطلب">
                      </div>
                    </a>
                  </div>
                <?php endif; ?>
                <!-- Holder -->
                <div class="post-content-space text-right">
                  <!-- Heading -->
                  <div class="post-heading-space">
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
                  <div class="post-list-options">
                    <span><i class="lni lni-comments"></i><?php echo get_comments_number(); ?> دیدگاه</span>
                    <span><i class="lni lni-heart"></i><?php echo esc_html__($likeCountRel->found_posts); ?> پسندشده</span>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
<?php
  endif;
endif;
$post = $orig_post;
wp_reset_query();
?>