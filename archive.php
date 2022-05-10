<?php get_header(); ?>

<!-- Archive -->
<section id="archive">
  <div class="container-holder">
    <div class="container-fluid">

      <?php
      // Get template part of archive
      get_template_part('/template-parts/posts/post', 'archive');
      ?>

      <?php
      // Get template part of pagination
      get_template_part('/template-parts/posts/post', 'pagination');
      ?>

    </div>
  </div>
</section>


<?php get_footer(); ?>