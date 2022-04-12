<!-- Author -->
<div class="post-box">
  <div class="post-content">
    <div class="post-author">
      <div>
        <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="آواتاز نویسنده">
        <div>
          <?php echo get_the_author_posts_link(); ?>
          <span><?php echo get_the_author_meta('nickname'); ?></span>
          <p><?php echo get_the_author_meta('description'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>