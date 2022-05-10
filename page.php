<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">
      <?php while (have_posts()) : the_post(); ?>
        <div class="row">

          <?php if (has_post_thumbnail()) : ?>
            <!-- Single thumbnail -->
            <div class="single-thumbnail">
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="تصویر مطلب">
            </div>
          <?php endif; ?>

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
    </div>

  <?php endwhile; ?>
  </div>
</section>

<?php get_footer(); ?>