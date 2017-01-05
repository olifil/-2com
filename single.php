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
      <?php
      	// Start the loop.
      	while ( have_posts() ) : the_post();

          // Le titre de la page
  		    the_title( '<h1>', '</h1>' );

          ?>
          <div class="row">
            <div class="col-md-2 ident">
              <?php
                // Inclusion de la navigation des articles
                get_template_part('template-parts/part', 'ident');
               ?>
            </div>
            <div class="col-md-offset-1 col-md-9">
              <?php
        			// Affichage du contenu de la page
        			the_content();
              ?>
            </div>
          </div>

          <?php
      		// End of the loop.
      	endwhile;

      ?>

    </div>

    <?php get_footer() ?>

  </body>
</html>
