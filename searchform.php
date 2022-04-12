<!-- Search form -->
<form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <input type="text" class="search-input" value="<?php echo get_search_query(); ?>" autocomplete="off" name="s" id="s" placeholder="به دنبال چیزی هستید؟">
  <span class="search-case search-case-alt">
    <i id="search-alt" class="lni lni-search-alt"></i>
    <i id="spinner-alt" class="animate-rotate"></i>
  </span>
  <span class="search-case" id="search-box-close" data-type="close" data-search="0"><i class="lni lni-close"></i></span>
  <!-- Search results -->
  <div class="search-results">
    <div class="row"></div>
  </div>
</form>