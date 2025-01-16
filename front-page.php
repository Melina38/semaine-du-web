<?php get_header(); ?>


  <section class="hero-section container">
      <div class="hero-container">
        <?php 
        $hero_groupe = get_field("hero-header");
        //echo '<pre>'; 
        //var_dump($hero_groupe);
        //echo '</pre>';
        ?>
          <h1><?php echo $hero_groupe["titre"];?></h1>
          <h2><?php echo $hero_groupe["sous-titre"];?></h2>
      </div>
      <div class="hero-image">
          <img src="<?php echo $hero_groupe["hero-image"]["url"];?>" alt="personnage rose qui aide un personnage bleu triste">
      </div>
  </section>


  <?php 
        $quiz_groupe = get_field("quiz_groupe");
        //echo '<pre>'; 
        //var_dump($quiz_groupe);
        //echo '</pre>';
        ?>



  <section class="chemin-section container">
    <div class="quiz-container">
  <!--<img src="http://wordpress.test/wp-content/uploads/2025/01/bulle-gauche.svg" alt="coeur rose enthousiaste qui tent les bras pour montrer le bouton"> -->
      <div class="quiz-text">
        <h2><?php echo $quiz_groupe["titre"];?></h2>
        <h3><?php echo $quiz_groupe["sous-titre"];?></h3>
      </div>
      
      <div class="quiz-button">
        <a href="">Démarrer le quiz<img src="<?php echo $quiz_groupe["bouton-image"]["url"];?>" alt="Petite case cocher et point d'interogation"></a>
        <img class="coeur-img" src="<?php echo $quiz_groupe["image"]["url"];?>" alt="coeur rose enthousiaste qui tent les bras pour montrer le bouton">
      </div>
      

    </div>



     <?php 
        $guide_groupe = get_field("guide_groupe");
        //echo '<pre>'; 
        //var_dump($guide_groupe);
        //echo '</pre>';
        ?>


    <div class="guide-container">
        <div class="quiz-text">
            <h2><?php echo $guide_groupe["titre"];?></h2>
            <h3><?php echo $guide_groupe["sous-titre"];?></h3>
        </div>
          
          <div class="quiz-button">
            <a href="<?php echo $guide_groupe["lien-bouton"]["url"];?>"><?php echo $guide_groupe["lien-bouton"]["title"];?><img src="<?php echo $guide_groupe["image-bouton"]["url"];?>" alt="Petite case cocher et point d'interogation"></a>
            <img class="coeur-img" src="<?php echo $guide_groupe["image"]["url"];?>" alt="triangle violet enthousiaste qui tent les bras pour montrer le bouton">
          </div>
    </div>

  </section>

  <?php
        $tout_savoir = get_field("tout_savoir");
        ?>
  <section class="categories-section container" id="guide">
    <div class="titre-categories">
      <h1>Tout savoir sur les violences sexuelles</h1>
      <a href="">Voir plus d'articles</a>
    </div>
    
    <div class="categories-container">
    <?php
        foreach ($tout_savoir['contenu'] as $element) {
          ?>
          
          <a href="">
        <div class="categorie-div">
          <img src="http://wordpress.test/wp-content/uploads/2025/01/orange.svg" alt="icone de la categorie">
          <h3>Qui sont les victimes de violences sexuelles ?</h3>
        </div>
      </a>
          
          
          <?php
        }
        ?>
     
      
      <a href="">
        <div class="categorie-div">
          <img src="http://wordpress.test/wp-content/uploads/2025/01/auteur.svg" alt="icone de la categorie">
          <h3>Qui sont les auteurs de violences sexuelles ?</h3>
        </div>
      </a>

      <a href="">
        <div class="categorie-div">
          <img src="http://wordpress.test/wp-content/uploads/2025/01/trauma.svg" alt="icone de la categorie">
          <h3>Quels sont les traumatismes ?</h3>
        </div>
      </a>
      
  </section>
  <section class="carousel-section container">
      <div>
        <h2>Vous accompagnez un patient présentant des comportements sexuels problématiques ou victimes de violences sexuelles ?</h2>
        <h3>Explorez nos différentes catégories et trouvez les ressources adaptées à chaque situation !</h3>
      </div>
  </section>
      <div class="carousel-container container">
        <div class="carousel">
            <div class="carousel-item">
                <a class="lien-carousel" href="">
                    <h2>Développement psychosexuel</h2>
                    <img src="http://wordpress.test/wp-content/uploads/2025/01/psychosexuel.svg" alt="symbole sexe féminin et masculin">
                </a>
            </div>
            <div class="carousel-item">
                <a class="lien-carousel" href="">
                    <h2>Violences sexuelles</h2>
                    <img src="http://wordpress.test/wp-content/uploads/2025/01/violences.svg" alt="symbole sexe féminin et masculin">
                </a>
            </div>
            <div class="carousel-item">
                <a class="lien-carousel" href="">
                    <h2>Sexualité et genre</h2>
                    <img src="http://wordpress.test/wp-content/uploads/2025/01/sexualite.svg" alt="symbole sexe féminin et masculin">
                </a>
            </div>
            <div class="carousel-item">
                <a class="lien-carousel" href="">
                    <h2>Accompagnement</h2>
                    <img src="http://wordpress.test/wp-content/uploads/2025/01/accompagnement.svg" alt="autre sujet">
                </a>
            </div>
            <div class="carousel-item">
                <a class="lien-carousel" href="">
                    <h2>La loi</h2>
                    <img src="http://wordpress.test/wp-content/uploads/2025/01/loi.svg" alt="autre sujet">
                </a>
            </div>
            <div class="carousel-item">
                <a class="lien-carousel" href="">
                    <h2>Outils</h2>
                    <img src="http://wordpress.test/wp-content/uploads/2025/01/outils.svg" alt="autre sujet">
                </a>
            </div>
      </div>
    </div>
  
  




<!--
<div class="carousel-div container">
  <a class="lien-carousel" href="">
    <h2>Orientation sexuelle et identité de genre</h2>
    <img src="http://wordpress.test/wp-content/uploads/2025/01/sexualite.svg" alt="symbole sexe féminin et masculin">
  </a>
</div>
-->



<?php get_footer(); ?>
