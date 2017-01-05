<!DOCTYPE html>
<html lang="fr">

  <?php get_header() ?>

  <body>
    <header>
      <div class="container">
        <?php
          // Insertion de la navigation
          get_template_part('template-parts/part', 'nav');
         ?>
      </div>
    </header>

    <div class="container">

      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
          <h1>404</h1>
          <div class="col-md-offset-2 col-md-8">
            <p>
              Ce que vous cherchez ne se trouve pas ici !
            </p>
            <p>
              Vous pouvez poursuivre votre navigation en vous rendant sur <a href="<?php echo bloginfo('url') ?>">notre page d'accueil</a>.
            </p>
          </div>
        </div>
      </div>

    </div>

    <?php get_footer() ?>

  </body>
</html>
