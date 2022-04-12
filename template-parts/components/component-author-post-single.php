<!-- Author post single -->
<div class="post-box">
  <div class="post-content">
    <div class="author-post-single">
      <div class="author-post-single-avatar">
        <?php echo get_avatar(get_the_author_meta('ID'), '120'); ?>
      </div>
      <div class="author-post-single-info">
        <b>
          <?php echo get_the_author_posts_link(); ?>
          <?php if (get_the_author_meta('nickname')) : ?>
            <span>
              || <?php echo get_the_author_meta('nickname'); ?>
            </span>
          <?php endif; ?>
        </b>
        <p>
          <?php echo get_the_author_meta('description'); ?>
        </p>
      </div>
    </div>
  </div>
</div>