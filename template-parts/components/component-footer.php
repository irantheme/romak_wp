<!-- Footer -->
<footer id="footer">
  <div class="container">
    <!-- Social media -->
    <ul class="social-media-footer">
      <?php
      // Get template part of social media
      get_template_part('/template-parts/hooks/hook', 'social-media');
      ?>
    </ul>
    <!-- Copyright -->
    <div class="copyright">
      <?php echo esc_html__(get_option('irantheme_copyright')); ?>
    </div>
  </div>
</footer>

<!-- Go to top -->
<a href="#top" id="go-to-top"><i class="lni lni-chevron-up"></i></a>