<?php
/*
Template Name: OnePage
*/
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@2com - Maquette</title>
    <?php wp_head() ?>
  </head>
  <body id="top">

    <a href="javascript:;" class="btn btn-default btn-menu" title="Ouvrir le menu">
      <span class="glyphicon glyphicon-menu-hamburger"></span>
    </a>
    <!-- La navigation  -->
    <div id="menu">
      <a href="javascript:;" class="btn btn-default btn-close text-center" title="Fermer le menu">
        <span class="glyphicon glyphicon-remove"></span>
      </a>
      <ul>
        <li class="active"><a href="#top">Notre agence</a></li>
        <li><a href="#slide2">Nos savoirs faire</a></li>
        <li><a href="#slide3">Notre offre</a></li>
        <li><a href="#slide4">Nous contacter</a></li>
      </ul>
    </div>

    <div id="page">
      <div id="slide1">
        <div class="container">

          <?php get_template_part( 'template-parts/header/header', 'logo' ) ?>

          <div class="row item">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
              <div class="row">
                <h2 class="right">Notre agence</h2>
                <p class="lead bold">
                  @2com est l’atout de votre communication.
                </p>
                <p class="lead">
                  Passionnés par le design graphique & la communication digitale, nous vous permettons d’afficher vos idées, vos produits, vos stratégies, vos offres…
                </p>
                <p class="right">
                  <a href="<?php echo bloginfo('url') ?>/notre-agence/" class="btn btn-default btn-lg action-orange">En savoir +</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="slide2">
          <div class="container">
            <div class="row">
              <div class="col-md-4">

              </div>
              <div class="col-md-8">
                <div class="row item">
                  <h2 class="right">Nos savoirs faire</h2>
                  <p class="lead bold">
                    Notre agence, c'est également des réalisations, des clients qui nous ont fait confiance.
                  </p>
                  <p class="lead">
                    Nos savoirs faire c'est la présentation de notre book, de nos différents travaux, de ce qui constitue notre expérience.
                  </p>
                  <p class="right">
                    <a href="<?php echo bloginfo('url') ?>/savoirs-faire/" class="btn btn-default btn-lg action-red">En savoir +</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
      </div>

      <div id="slide3">
        <div class="container">
          <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
              <div class="row item">
                <h2 class="right">Notre offre</h2>
                <p class="lead bold">
                  L’agence @2com vous propose une gamme de prestations et de services complète que ce soit pour vos besoins en print ou en web.
                </p>
                <p class="lead">
                  Nous avons conçu pour vous des solutions sous forme de packs et bien sûr, sur demande des solutions à la carte, selon vos besoins.
                </p>
                <p class="right">
                  <a href="<?php echo bloginfo('url') ?>/notre-offre/" class="btn btn-default btn-lg action-orange">En savoir +</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="slide4">
        <div class="container">
          <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
              <div class="row item">
                <h2 class="right">En savoir +</h2>
                <p class="lead bold">
                  Besoin d'un devis, d'un complément d'information ?
                </p>
                <p class="lead">
                  Notre page 'Contact' est votre premier lien avec nous.
                </p>
                <p class="right">
                  <a href="<?php echo bloginfo('url') ?>/contact/" class="btn btn-default btn-lg action-red">Nous contacter</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a href="#top" class="btn btn-default btn-top" title="Haut de page">
      <span class="glyphicon glyphicon-arrow-up"></span>
    </a>
    <?php wp_footer() ?>
  </body>
</html>
