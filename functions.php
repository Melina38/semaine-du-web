<?php
  function add_style() {
    //wordpress ajoute a la feuille de style ce qu'il doit enregistrer, viens dans les fichier et prend le fichier style.css, false = pas de dépendance envers d'autres fichiers
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/css/layout/reset.css', false);
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false);
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/css/layout/footer.css', false);
    wp_enqueue_style('header-style', get_template_directory_uri() . '/css/layout/header.css', false);
    wp_enqueue_style('accueil-style', get_template_directory_uri() . '/css/pages/accueil.css', false);
    wp_enqueue_style('contact-style', get_template_directory_uri() . '/css/pages/contact.css', false);
    wp_enqueue_style('quiz-style', get_template_directory_uri() . '/css/pages/quiz.css', false);
    wp_enqueue_style('propos-style', get_template_directory_uri() . '/css/pages/propos.css', false);


    wp_enqueue_style('citation-style', get_template_directory_uri() . '/css/template-parts/citation.css', false);
    wp_enqueue_style('bloc-texte-image-style', get_template_directory_uri() . '/css/template-parts/bloc-texte-image.css', false);
    wp_enqueue_style('bloc-image-texte-style', get_template_directory_uri() . '/css/template-parts/bloc-image-texte.css', false);
    wp_enqueue_style('vignettes-style', get_template_directory_uri() . '/css/template-parts/vignettes.css', false);
    wp_enqueue_style('vignette2-style', get_template_directory_uri() . '/css/template-parts/vignette2.css', false);
    wp_enqueue_style('titre-style', get_template_directory_uri() . '/css/template-parts/titre.css', false);
    wp_enqueue_style('titre-image-style', get_template_directory_uri() . '/css/template-parts/titre-image.css', false);
    wp_enqueue_style('texte-style', get_template_directory_uri() . '/css/template-parts/texte.css', false);
    wp_enqueue_style('sous-titre-style', get_template_directory_uri() . '/css/template-parts/sous-titre.css', false);
    wp_enqueue_style('liste-style', get_template_directory_uri() . '/css/template-parts/liste.css', false);
    wp_enqueue_style('image-style', get_template_directory_uri() . '/css/template-parts/image.css', false);
    wp_enqueue_style('lien-style', get_template_directory_uri() . '/css/template-parts/lien.css', false);
    wp_enqueue_style('3bloc-liste-style', get_template_directory_uri() . '/css/template-parts/3bloc-liste.css', false);
    wp_enqueue_style('flickity','https://unpkg.com/flickity@2.3.0/dist/flickity.min.css');
    
    
  }
  add_action( 'wp_enqueue_scripts', 'add_style' );


  function add_script() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('flickity-js', 'https://unpkg.com/flickity@2.3.0/dist/flickity.pkgd.min.js', array(), false, true);
    
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array('jquery','flickity-js'), false, true);
    
  }
  add_action( 'wp_enqueue_scripts', 'add_script' );



  	
  add_theme_support( 'post-thumbnails' );

  // Ajout d'une taille pour une image
  add_image_size( name: 'custom_size', width: 180 , height: 300 , crop: true );
?>

  