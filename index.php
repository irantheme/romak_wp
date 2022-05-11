<?php get_header(); ?>

<!-- Archive -->
<section id="archive">
  <div class="container-holder">
    <div class="container-fluid">

      <?php
      if (have_posts()) : ?>

        <!-- Box style style -->
        <div class="post-box-style">
          <!-- Heading mode -->
          <div class="heading-mode heading-mode-dark" data-aos="fade-down">
            <h2><?php echo get_the_archive_title(); ?></h2>
          </div>
          <div class="row">
            <?php
            while (have_posts()) : the_post(); ?>
              <!-- Item -->
              <div class="col-lg-3" data-aos="fade-down">

                <?php
                // Get template part of box
                get_template_part('/template-parts/posts/post', 'box');
                ?>

              </div>
            <?php endwhile; ?>
          </div>
        </div>
      <?php
      endif;
      ?>

      <?php
      // Get template part of pagination
      get_template_part('/template-parts/posts/post', 'pagination');
      ?>

    </div>
  </div>
</section>


<?php get_footer(); ?>