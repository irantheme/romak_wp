<?php
$orig_post = $post;
global $post;
$related_category = get_the_category($post->ID);
if ($related_category) :
  $category_ids = array();
  foreach ($related_category as $individual_category) {
    $category_ids[] = $individual_category->term_id;
  }
  $args = array(
    'post_type' => 'post',
    'category__in' => $category_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page' => 4,
    'ignore_sticky_posts' => 1
  );
  $related_query = new WP_Query($args);

  if ($related_query->have_posts()) : ?>

    <!-- Single post box -->
    <div class="post-box-style">
      <!-- Heading mode -->
      <div class="heading-mode heading-mode-dark" data-aos="fade-down">
        <h2>مطالب مرتبط</h2>
      </div>
      <div class="row">
        <?php
        while ($related_query->have_posts()) : $related_query->the_post(); ?>
          <!-- Item -->
          <div class="col-lg-3">

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
endif;
$post = $orig_post;
wp_reset_query();
?>