<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Spicy+Rice&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <title>Mon site internet</title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="container header">
    <img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.svg" alt="logo" width="170" height="106">
    <div>
        <div class="sur-header">
          <p>Proposer le soin le plus adapté aux besoins du mineur</p>
          <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
            <input type="text" value="" name="s" id="s" placeholder="Rechercher..." />
            <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
          </form>

          <a class="lien-quiz" href="">QUIZ<img src="<?php echo get_template_directory_uri(); ?>/img/quiz.svg" alt="Petite case cocher et point d'interogation"></a>
          <a class="lien-propos" href="">À PROPOS</a>
        </div>
        <nav>
          <ul>
            <li><a href="">DÉVELOPPEMENT PSYCHOSEXUEL</a></li>
            <li><a href="">VIOLENCES SEXUELLES</a></li>
            <li><a href="">SEXUALITÉ ET GENRE</a></li>
            <li><a href="">ACCOMPAGNEMENT</a></li>
            <li><a href="">LA LOI</a></li>
            <li><a href="">OUTILS</a></li>
          </ul>
        </nav>
    </div>
    
    
  </header>