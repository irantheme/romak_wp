<?php if (paginate_links()) : ?>
  <!-- Pagination -->
  <div class="pagination" data-aos="fade-up">
    <?php echo paginate_links(array(
      'prev_text' => 'صفحه قبل',
      'next_text' => 'صفحه بعد'
    )); ?>
  </div>
<?php endif; ?>