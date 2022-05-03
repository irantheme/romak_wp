<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">

      <?php while (have_posts()) : the_post(); ?>
        <div class="row">

          <!-- Image of single -->
          <div class="col-lg-8">

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
          <div class="col-lg-4">
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
                <a target="_blank" href="http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>" data-toggle="tooltip" data-placement="top" title="اشتراک در فیس بوک"><i class="lni lni-facebook"></i></a>
                <a target="_blank" href="http://twitter.com/share?text=<?php echo get_the_title(); ?>&url=<?php echo get_permalink(); ?>" data-toggle="tooltip" data-placement="top" title="اشتراک در توئیتر"><i class="lni lni-twitter"></i></a>
                <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php get_the_title(); ?>" data-toggle="tooltip" data-placement="top" title="اشتراک در لینکدین"><i class="lni lni-linkedin"></i></a>
                <a target="_blank" href="https://api.whatsapp.com/send?text=<?php the_title(); ?>:<?php the_permalink(); ?>" data-toggle="tooltip" data-placement="top" title="اشتراک در واتس آپ"><i class="lni lni-whatsapp"></i></a>
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

          </div>

        </div>
      <?php endwhile; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>