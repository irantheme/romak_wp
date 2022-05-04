<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">
      <?php while (have_posts()) : the_post(); ?>
        <div class="row">

          <!-- Image of single -->
          <div class="col-lg-8" data-aos="fade-left">
            <!-- Single thumbnail -->
            <div class="single-thumbnail">
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="تصویر مطلب">
            </div>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            // if (comments_open() || get_comments_number()) :
            //   comments_template();
            // endif;
            ?>
          </div>

          <!-- Content of single -->
          <div class="col-lg-4" data-aos="fade-right">
            <!-- Next & prev post -->
            <div class="next-prev-post">
              <!-- Prev post button -->
              <?php $prev_post = get_previous_post(); ?>
              <a href="<?php if (!empty($prev_post)) : echo get_permalink($prev_post->ID);
                        else : echo '#';
                        endif; ?>" class="prev-post <?php if (empty($prev_post)) echo 'disable'; ?>">
                <i class="ti-arrow-left"></i>
              </a>
              <!-- Next post button -->
              <?php $next_post = get_next_post(); ?>
              <a href="<?php if (!empty($next_post)) : echo get_permalink($next_post->ID);
                        else : echo '#';
                        endif; ?>" class="next-post <?php if (empty($next_post)) echo 'disable'; ?>">
                <i class="ti-arrow-right"></i>
              </a>
            </div>

            <!-- Single heading -->
            <div class="single-heading">
              <span><i class="lni lni-calendar"></i><?php echo get_the_date('j F Y'); ?></span>
              <h1><?php the_title(); ?></h1>
            </div>

            <!-- Single author -->
            <div class="single-author">
              <div class="single-author-img">
                <?php echo get_avatar(get_the_author_meta('ID'), 100); ?>
              </div>
              <div class="single-author-info">
                <h4><?php the_author_meta('display_name'); ?></h4>
                <p><?php the_author_meta('nickname'); ?></p>
              </div>
            </div>

            <!-- Single text -->
            <div class="single-text">
              <?php the_content(); ?>
            </div>

            <!-- Single share -->
            <div class="single-share">
              <!-- Single share button -->
              <button class="button-no-style single-share-button"><i class="lni lni-share-alt"></i>اشتراک گذاری</button>
              <!-- Single share list -->
              <div class="single-share-list">
                <a target="_blank" href="http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>"><i class="lni lni-facebook"></i></a>
                <a target="_blank" href="http://twitter.com/share?text=<?php echo get_the_title(); ?>&url=<?php echo get_permalink(); ?>"><i class="lni lni-twitter"></i></a>
                <a target="_blank" href="https://t.me/share/url?url=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>"><i class="lni lni-telegram"></i></a>
                <a target="_blank" href="https://api.whatsapp.com/send?text=<?php echo get_the_title(); ?>:<?php the_permalink(); ?>"><i class="lni lni-whatsapp"></i></a>
              </div>
            </div>

            <?php
            $categories = get_the_category();
            $separator = ' ';
            $output = '';
            if (!empty($categories)) : ?>
              <!-- Single categories -->
              <div class="single-categories">
                <!-- Single categories icon -->
                <div class="single-categories-icon"><i class="ti-folder"></i></div>
                <!-- Single categories content -->
                <div class="single-categories-content">
                  <strong>دسته بندی</strong>
                  <div class="single-categories-list">
                    <?php
                    foreach ($categories as $category) {
                      $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" title="' . esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)) . '">' . esc_html($category->name) . '</a>' . $separator;
                    }
                    echo trim($output, $separator);
                    ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <?php if (has_tag()) : ?>
              <!-- Single tags -->
              <div class="single-tags">
                <div class="single-tags-list">
                  <?php
                  $tags = get_the_tags();
                  if ($tags) {
                    foreach ($tags as $tag) {
                      echo '<a href="' . get_tag_link($tag->term_id) . '"><i class="lni lni-tag"></i>' . $tag->name . '</a>';
                    }
                  }
                  ?>
                </div>
              </div>
            <?php endif; ?>

          </div>
        </div>

        <!-- Single related posts -->
        <div class="single-related-posts">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab unde dolorum maiores neque, itaque possimus culpa voluptates debitis quam aut natus et. Laudantium, non maxime obcaecati recusandae sunt nemo pariatur.
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>