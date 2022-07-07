<div class="post-box-item">
  <?php if (has_post_thumbnail()) : ?>
    <!-- Post image -->
    <div class="post-box-image-space">
      <a href="<?php echo get_the_permalink(); ?>" class="post-box-image-link">
        <!-- Post thumbnail -->
        <div class="post-box-thumbnail-space">
          <img src="<?php the_post_thumbnail_url('large'); ?>" alt="تصویر مطلب">
        </div>
      </a>
    </div>
  <?php endif; ?>
  <!-- Holder -->
  <div class="post-box-content-space text-right">
    <!-- Heading -->
    <div class="post-box-heading-space">
      <!-- Date -->
      <span><i class="lni lni-calendar"></i><?php echo get_the_date('j F Y'); ?></span>
      <h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
    </div>
    <?php
    // Counter of like
    $likeCountRel = new WP_Query(array(
      'post_type' => 'like',
      'meta_query' => array(
        array(
          'key' => 'liked_meta_value_key',
          'compare' => '=',
          'value' => get_the_ID()
        )
      )
    ));
    ?>
    <!-- Comments & Likes -->
    <div class="post-box-list-options">
      <span><i class="lni lni-comments"></i><?php echo get_comments_number(); ?> دیدگاه</span>
      <span><i class="lni <?php if ($likeCountRel->found_posts) {
                            echo 'lni-heart-filled';
                          } else {
                            echo 'lni-heart';
                          } ?>"></i><?php echo esc_html__($likeCountRel->found_posts); ?> پسندشده</span>
    </div>
  </div>
</div>