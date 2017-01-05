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

    			// Affichage du contenu de la page
    			the_content();

      		// End of the loop.
      	endwhile;
      ?>
    </div>

    <?php get_footer() ?>

  </body>
</html>
