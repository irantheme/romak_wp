<?php

/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (post_password_required())
  return;
?>

<div id="comments">

  <!-- Comment form -->
  <div class="post-box">
    <div class="post-content">
      <?php
      //Declare Vars
      $comment_send = 'ثبت دیدگاه';
      $comment_reply = 'ارسال دیدگاه';
      $comment_reply_to = 'پاسخ به';

      $comment_author = 'نام *';
      $comment_email = 'ایمیل *';
      $comment_body = 'متن دیدگاه *';
      $comment_url = 'سایت شما';
      $comment_cookies_1 = ' نظر شما در دست بررسی است.';
      $comment_cookies_2 = ' سیاست حفظ حریم خصوصی';

      $comment_before = '<p class="text-description">ایمیل شما منتشر نخواهد شد، ورودی های ضروری با (*) علامت گذاری شده اند.</p>';

      $comment_cancel = 'لغو پاسخ';

      //Array
      $comments_args = array(
        //Define Fields
        'fields' => array(
          //Author field
          'author' => '
          <label for="author">' . __($comment_author) . '</label>
          <input type="text" id="author" name="author" aria-required="true"></input>',
          //Email Field
          'email' => '
          <label for="email">' . __($comment_email) . '</label>
          <input type="email" id="email" name="email"></input>',
          //URL Field
          'url' => '
          <label for="url">' . __($comment_url) . '</label>
          <input type="url" id="url" name="url"></input>',
          //Cookies
          'cookies' => '',
        ),
        // Change the title of send button
        'label_submit' => __($comment_send),
        // Change the title of the reply section
        'title_reply' => __($comment_reply),
        // Change the title of the reply section
        'title_reply_to' => __($comment_reply_to),
        //Cancel Reply Text
        'cancel_reply_link' => __($comment_cancel),
        // Redefine your own textarea (the comment body).
        'comment_field' => '
        <label for="comment">' . __($comment_body) . '</label>
        <textarea id="comment" name="comment" aria-required="true"></textarea>',
        //Message Before Comment
        'comment_notes_before' => __($comment_before),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        //Submit Button ID
        'id_submit' => __('comment-submit'),
      );
      comment_form($comments_args);
      ?>
    </div>
  </div>

  <!-- Check have comment -->
  <?php if (have_comments()) : ?>

    <div class="post-box">
      <div class="comments-holder">
        <ul class="comments-list">
          <?php
          wp_list_comments(array(
            'avatar_size' => 100,
            'style'      => 'ul',
            'short_ping' => true,
            'callback' => 'irantheme_better_comments',
            'reverse_top_level' => true,
            // 'per_page' => 2
          ));
          ?>
        </ul><!-- .comment-list -->

        <?php
        // Are there comments to navigate through?
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
          <!-- Pagination comments list -->
          <div class="pagination">
            <?php paginate_comments_links(); ?>
          </div>
        <?php endif; // Check for comment navigation 
        ?>
      </div>
    </div>

  <?php endif; // have_comments() 
  ?>

</div><!-- #comments -->