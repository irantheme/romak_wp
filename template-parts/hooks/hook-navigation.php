<!-- Navigation -->
<nav id="navigation">
  <div class="text-center pt-5">
    <!-- Back nav -->
    <button id="back-nav" class="button-style button-dark">بازگشت<i class="lni lni-chevron-left"></i></button>
  </div>
  <!-- Logo -->
  <div class="logo">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </div>
  <!-- Navbar menu -->
  <div class="navbar-menu">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'headerNavLocation',
      'depth' => 1,
    ));
    ?>
  </div>
</nav>