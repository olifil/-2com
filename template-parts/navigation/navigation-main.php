<!-- La navigation  -->
<div id="menu">
  <a href="javascript:;" class="btn btn-default btn-close text-center" title="Fermer le menu">
    <span class="glyphicon glyphicon-remove"></span>
  </a>
  <?php
    wp_nav_menu( array(
      'theme_location' =>  'main',
    ));
   ?>
</div>
