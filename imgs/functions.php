<?php

require_once('lib/wp_bootstrap_navwalker.php');

add_theme_support( 'post-thumbnails' );

// Définition des positions de menus
register_nav_menus( array(
    'main' => 'Navigation principale',
    'bottom' => 'Navigation de pied de page',
) );

add_action( 'wp_enqueue_scripts', 'register_scripts' );
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function register_scripts()
{
  // Insertion des ressources communes
  wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );

  wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), 1.0, true );
  if ( is_front_page() ) {
    // Insertion des ressources spécifiques à la page d'accueil
    wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', array('bootstrap'), 1.0, false );

    wp_register_script( 'parallax', get_template_directory_uri() . '/assets/js/jquery.parallax-1.1.3.js', array('jquery'), 1.0, true );
    wp_register_script( 'localscroll', get_template_directory_uri() . '/assets/js/jquery.localscroll-1.2.7-min.js', array(), 1.0, true );
    wp_register_script( 'scrollTo', get_template_directory_uri() . '/assets/js/jquery.scrollTo-1.4.2-min.js', array(), 1.0, true );
    wp_register_script( 'app', get_template_directory_uri() . '/js/app.js', array('jquery', 'bootstrap', 'parallax', 'localscroll', 'scrollTo'), 1.0, true );
  } else {
    // Insertion des ressources spécifiques aux autres types de page
    wp_register_style( 'bootstrap-theme', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap-theme.min.css', array( 'bootstrap' ), 1.0, false );
    wp_register_style( 'fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/font-awesome.min.css', array(), 1.0, false );
    wp_register_style( 'at2com-style', get_template_directory_uri() . '/css/at2com.css', array( 'bootstrap-theme', 'fontawesome' ), 1.0, false );

    wp_register_script( 'atcom_app', get_template_directory_uri() . '/js/app_page.js', array( 'jquery', 'bootstrap' ), 1.0, true );
  }
}

function enqueue_scripts()
{
  // Insertion des ressources communes
  if ( is_front_page() ) {
    // Insertion des ressources spécifiques à la page d'accueil
    wp_enqueue_style( 'style' );

    wp_enqueue_script( 'app' );
  } else {
    // Insertion des ressources spécifiques aux autres types de page
    wp_enqueue_style( 'at2com-style' );

    wp_enqueue_script( 'atcom_app' );
  }
}

?>
