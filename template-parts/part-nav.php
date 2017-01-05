<?php
  // Template de navigation haute
 ?>
<nav class="navbar navbar-default top">
  <div class="logo">
    <a href="<?php echo site_url() ?>">
      <img src="<?php bloginfo('template_url') ?>/imgs/logo-header.png" />
    </a>
  </div>
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
      <span class="src-only"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <?php
    wp_nav_menu( array(
      'menu'              => 'main-nav',
      'theme_location'    => 'main',
      'depth'             => 2,
      'container'         => 'div',
      'container_class'   => 'collapse navbar-collapse',
      'container_id'      => 'navigation',
      'menu_class'        => 'nav navbar-nav',
      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
      'walker'            => new wp_bootstrap_navwalker())
    );
  ?>
</nav>
