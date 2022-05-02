<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">

      <?php while (have_posts()) : the_post(); ?>
        <div class="row flex-lg-row-reverse">

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

          </div>

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

        </div>
      <?php endwhile; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>