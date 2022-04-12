<!-- Copyright -->
<div class="copyright">
  <div class="container-holder">
    <div class="container-fluid">
      <!-- Social networks -->
      <ul class="social-networks">
        <?php
        // Get template part of social media
        get_template_part('/template-parts/hooks/hook', 'social-media');
        ?>
      </ul>
      <p><?php echo esc_html__(get_option('irantheme_copyright')); ?></p>
    </div>
  </div>
</div>

<!-- Go to top -->
<a href="#top" id="go-to-top"><i class="lni lni-chevron-up"></i></a>