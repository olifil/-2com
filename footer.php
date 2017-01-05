<?php
  // /footer.php
 ?>

  <footer>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-menu col-md-10">
            <?php wp_nav_menu( array(
              'theme_location' => 'bottom'
            ) ); ?>
            <span class="clearfix"></span>
          </div>
          <div class="reseaux col-md-2">
            <p class="titre">Restez en contact avec nous</p>
            <ul>
              <li>
                <a href="https://www.facebook.com/at2com" title="Notre page Facebook" target="_blank">
                  <img src="<?php bloginfo('template_url') ?>/imgs/icon-facebook.png" alt="" />
                </a>
              </li>
            </ul>
            <p class="at2com-footer"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="post-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            &copy; @2com 2016
            <div class="footer-logo"></div>
          </div>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer() ?>
