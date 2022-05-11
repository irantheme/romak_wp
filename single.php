<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">

      <?php
      // Get template part of single
      get_template_part('/template-parts/posts/post', 'single');
      ?>

    </div>
  </div>
</section>

<?php
// Get template part of comments
get_template_part('/template-parts/comments/comment', 'fixed');
?>

<?php get_footer(); ?>