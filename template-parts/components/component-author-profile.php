<!-- Author profile -->
<div class="author-profile">
  <div class="post-box">
    <div class="post-content">
      <?php
      $author = get_user_by('slug', get_query_var('author_name'));
      $date_raw = get_the_author_meta('user_registered', $author->ID);
      $date_str = explode(' ', $date_raw);
      $date_split = explode('-', $date_str[0]);
      $date_year = $date_split[0];
      $date = date('Y') - $date_year;
      // echo $author->ID;
      ?>
      <div class="author-profile-holder">
        <!-- Author profile avatar -->
        <div class="author-profile-avatar">
          <?php echo get_avatar($author->ID, '200'); ?>
        </div>
        <!-- Author profile info -->
        <div class="author-profile-info">
          <h3><?php echo esc_html__($author->display_name); ?></h3>
          <cite><?php echo esc_html__($author->nickname); ?></cite>
          <span>
            <?php
            if ($date < 1) {
              echo esc_html__('کم تر از 1 سال عضویت در ' . get_bloginfo('name'));
            } else {
              echo esc_html__('بیشتر از ' . $date . 'سال عضویت در ' . get_bloginfo('name'));
            }
            ?>
          </span>
          <p><?php echo esc_html__($author->description); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>