<?php
  function add_style() {
    //wordpress ajoute a la feuille de style ce qu'il doit enregistrer, viens dans les fichier et prend le fichier style.css, false = pas de dépendance envers d'autres fichiers
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/reset.css', false);
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false);
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/footer.css', false);
    wp_enqueue_style('header-style', get_template_directory_uri() . '/header.css', false);
    wp_enqueue_style('accueil-style', get_template_directory_uri() . '/accueil.css', false);
    
    
  }
  add_action( 'wp_enqueue_scripts', 'add_style' );


  function add_script() {
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array(), false, true);
  }
  add_action( 'wp_enqueue_scripts', 'add_script' );

  // Ajout d'une taille pour une image
  add_image_size( name: 'custom_size', width: 180 , height: 300 , crop: true );
?>

  