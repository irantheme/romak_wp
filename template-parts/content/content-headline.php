<!-- Headline -->
<div class="headline">
  <div class="container-holder">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 py-4">
          <!-- About -->
          <div class="footer-heading">درباره</div>
          <div class="footer-about">
            <p><?php echo esc_html__(get_option('irantheme_about_excerpt')); ?></p>
            <a href="<?php echo esc_url(get_option('irantheme_about_link')); ?>">مشاهده بیشتر<i class="lni lni-chevron-left"></i></a>
          </div>
        </div>
        <div class="col-md-3 py-4">
          <!-- Latest posts -->
          <div class="footer-heading">آخرین مطالب</div>
          <?php
          $args = array(
            'posts_per_page' => 2,
            'post_type' => 'post'
          );
          $latest_blog_post = new WP_Query($args);
          while ($latest_blog_post->have_posts()) : $latest_blog_post->the_post();
          ?>
            <!-- List post item -->
            <div class="list-post-style">
              <?php if (has_post_thumbnail()) : ?>
                <div class="list-post-style-img">
                  <a href="<?php echo get_the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="تصویر پست">
                  </a>
                </div>
              <?php endif; ?>
              <div class="list-post-style-content">
                <h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                <span><?php echo get_the_date('j F Y'); ?></span>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <div class="col-md-3 py-4">
          <!-- Latest comments -->
          <div class="footer-heading">آخرین دیدگاه ها</div>
          <?php
          $latestCommentsQuery = new WP_Comment_Query();
          $latestComments = $latestCommentsQuery->query(array(
            'number' => 3
          ));
          if ($latestComments) :
          ?>
            <div class="footer-latest-comments">
              <ul>
                <?php
                foreach ($latestComments as $comment) :
                ?>
                  <!-- Item -->
                  <li>
                    <i class="lni lni-chevron-left"></i><span><?php echo get_comment_author($comment->comment_ID); ?></span> در <a href="<?php echo get_permalink($comment->comment_post_ID); ?>"><?php echo get_the_title($comment->comment_post_ID); ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-md-3 py-4">
          <!-- Tags -->
          <div class="footer-heading">برچسب ها</div>
          <div class="list-tags">
            <?php
            // Get number of tags
            // $number_tags = 0;
            // if ( get_option( 'footer_number_tags' ) ) {
            //   $number_tags = get_option( 'footer_number_tags' );
            // } else {
            //   $number_tags = 30;
            // }
            $tags = get_tags(array(
              'smallest'                  => 10,
              'largest'                   => 10,
              'unit'                      => 'px',
              'number'                    => 20,
              'format'                    => 'flat',
              'separator'                 => " ",
              'orderby'                   => 'count',
              'order'                     => 'DESC',
              'show_count'                => 1,
              'echo'                      => false
            ));
            foreach ($tags as $tag) {
              echo '<a href="' . get_term_link($tag) . '">' . esc_html__($tag->name) . '</a>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>