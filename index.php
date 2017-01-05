<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta name="google-site-verification" content="Rk3wSK1wxtT3yCYw7EtNpNVH7MVeOxYOfu5o2NWi3so" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <?php wp_head() ?>
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
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

    </div>

    <?php get_footer() ?>

  </body>
</html>
