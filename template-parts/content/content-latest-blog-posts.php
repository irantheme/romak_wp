<?php
$front_latest_blog_posts = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => esc_html__(get_option('irantheme_front_latest_blog_post_count')),
));
if ($front_latest_blog_posts->have_posts()) :
?>
  <!-- Latest blog posts -->
  <section id="latest-blog-posts">
    <div class="container">
      <!-- Heading mode -->
      <div class="heading-mode heading-mode-light" data-aos="fade-down">
        <h2>آخرین مطالب وبلاگ</h2>
      </div>
      <!-- List blog posts -->
      <div class="row">
        <?php while ($front_latest_blog_posts->have_posts()) : $front_latest_blog_posts->the_post(); ?>
          <!-- Item -->
          <div class="col-lg-4" data-aos="fade-up">
            <a href="<?php the_permalink(); ?>" class="post-box-little">
              <?php if (has_post_thumbnail()) : ?>
                <!-- Image -->
                <div class="post-thumbnail-little">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>
              <?php endif; ?>
              <!-- Heading -->
              <div class="post-heading-little">
                <span><i class="lni lni-calendar"></i><?php echo get_the_date('j F Y'); ?></span>
                <h3><?php the_title(); ?></h3>
              </div>
              <!-- Options -->
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
              <div class="post-options-little">
                <span><i class="lni lni-comments"></i>دیدگاه<em><?php echo get_comments_number(); ?></em></span>
                <span><i class="lni lni-heart"></i>پسندشده<em><?php echo esc_html__($likeCountRel->found_posts); ?></em></span>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>