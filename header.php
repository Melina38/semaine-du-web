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

  <title>Sexo Pro Info</title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="container header">
    <a href="https://sexoproinfo.com/"><img class="logo-header" src="<?php echo get_template_directory_uri();?>/img/logo-footer.svg" alt="logo" width="170" height="106"></a>
    <div>
        <div class="sur-header">
          <p>Proposer le soin le plus adapté aux besoins du mineur</p>
          <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
            <input type="text" value="" name="s" id="s" placeholder="Rechercher..." />
            <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
          </form>

          <a class="lien-quiz" href="https://sexoproinfo.com/index.php/quiz/">QUIZ<img src="<?php echo get_template_directory_uri(); ?>/img/quiz.svg" alt="Petite case cocher et point d'interogation"></a>
          <a class="lien-propos" href="https://sexoproinfo.com/index.php/a-propos/">À PROPOS</a>
        </div>
        <nav class="deckstop-nav">
          <ul>
            <li><a href="https://sexoproinfo.com/index.php/category/developpement-psychosexuel-de-lenfant/">DÉVELOPPEMENT PSYCHOSEXUEL</a></li>
            <li><a href="https://sexoproinfo.com/index.php/category/violences-sexuelles/">VIOLENCES SEXUELLES</a></li>
            <li><a href="https://sexoproinfo.com/index.php/category/sexualite_et_genre/">SEXUALITÉ ET GENRE</a></li>
            <li><a href="https://sexoproinfo.com/index.php/category/accompagnement/">ACCOMPAGNEMENT</a></li>
            <li><a href="https://sexoproinfo.com/index.php/category/la-loi/">LA LOI</a></li>
            <li><a href="https://sexoproinfo.com/index.php/category/les-outils/">OUTILS</a></li>
          </ul>
        </nav>
    </div>
    
    
  </header>
  <header class="header-mobile">
        <div class="header-container">
            <img src="https://sexoproinfo.com/wp-content/uploads/2025/02/logosexo.svg" alt="logo">
            <div class="baseline">
                <p>Proposer le soin le plus adapté aux besoins du mineur</p>
            </div>
            <div class="burger-menu" id="burger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <nav id="mobile-menu" class="mobile-menu">
        <button id="close-menu" class="close-menu"> 
            <img src="https://sexoproinfo.com/wp-content/uploads/2025/02/croix.svg" alt="Fermer" class="close-icon">
        </button> 
        <ul>
            <li><a href="https://sexoproinfo.com/index.php/category/developpement-psychosexuel-de-lenfant/">DÉVELOPEMENT PSYCHOSEXUEL</a></li>
            <li><a href="https://sexoproinfo.com/index.php/category/violences-sexuelles/">VIOLENCES SEXUELLES</a></li>
            <li><a href="https://sexoproinfo.com/index.php/category/sexulaite_et_genre/">SÉXUALITÉ ET GENRE</a></li>
            <li><a href="https://sexoproinfo.com/index.php/category/accompagnement/">ACCOMPAGNEMENT</a></li>
            <li><a href="https://sexoproinfo.com/index.php/category/la-loi/">LA LOI</a></li>
            <li><a href="https://sexoproinfo.com/index.php/category/les-outils/">OUTILS</a></li>
            <li><a href="https://sexoproinfo.com/index.php/a-propos/">À PROPOS</a></li>
        </ul>
        <div class="menu-actions">
            <form role="search" method="get" id="searchform" class="searchform-mobile" action="<?php echo home_url( '/' ); ?>">
                <input type="text" value="" name="s" id="s" placeholder="Rechercher..." />
                <button type="submit" id="searchsubmit">
                    <i class="fa fa-search"></i>
                    <img src="https://sexoproinfo.com/wp-content/uploads/2025/02/loupe.svg" alt="Rechercher" class="search-icon">
                </button>
            </form>
            
            <button class="quiz-btn"> <img src="https://sexoproinfo.com/wp-content/uploads/2025/01/quiz.svg" alt="Quiz" class="quiz-icon">QUIZ</button>
        </div>
    </nav>

    <div id="overlay" class="overlay"></div> 

    <script src="main.js"></script>