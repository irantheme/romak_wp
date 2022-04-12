<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">
      <div class="row flex-lg-row-reverse">
        <div class="col-lg-8">

          <?php while (have_posts()) : the_post(); ?>
            <?php
            // Get template part of single post
            get_template_part('/template-parts/content/content', 'single-post');
            ?>

            <?php
            // Get template part of post author
            get_template_part('/template-parts/components/component', 'author-post-single');
            ?>

            <?php
            // Get template part of related post
            get_template_part('/template-parts/content/content', 'related-post');
            ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
              comments_template();
            endif;
            ?>
          <?php endwhile; ?>

        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
          <?php get_sidebar(); ?>
        </div>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>