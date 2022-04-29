<!-- Header -->
<header id="header">

  <div class="container-holder">
    <div class="container-fluid">
      <!-- Main menu -->
      <div class="main-menu">

        <?php if (has_custom_logo()) : ?>
          <!-- Logo -->
          <div class="logo">
            <?php echo get_custom_logo(); ?>
          </div>
        <?php endif; ?>

        <!-- Open nav -->
        <button id="nav-open" class="dark">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </div>

</header>