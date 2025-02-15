<?php get_header(); ?>


  <section class="hero-section container">
      <div class="hero-container">
          <h1>Comprendre et accompagner les patients ayant des comportements sexuels problématiques ou ayant subit des violences :</h1>
          <h2>Découvrez le guide adressé aux professionnels du soin !</h2>
      </div>
      <div class="hero-image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/hero-image.svg" alt="personnage rose qui aide un personnage bleu triste">
      </div>
  </section>

  <section class="chemin-section container">
    <div class="quiz-container">
  <!--<img src="http://wordpress.test/wp-content/uploads/2025/01/bulle-gauche.svg" alt="coeur rose enthousiaste qui tent les bras pour montrer le bouton"> -->
      <div class="quiz-text">
        <h2>Déjà sensibilisé(e) aux violences sexuelles ?</h2>
        <h3>Testez vos connaissances sur les comportements sexuels problématiques et les violences sexuelles</h3>
      </div>
      
      <div class="quiz-button">
        <a href="">Démarrer le quiz<img src="<?php echo get_template_directory_uri(); ?>/img/quiz.svg" alt="Petite case cocher et point d'interogation"></a>
        <img class="coeur-img" src="<?php echo get_template_directory_uri(); ?>/img/coeur-quiz.svg" alt="coeur rose enthousiaste qui tent les bras pour montrer le bouton">
      </div>
      

    </div>


    <div class="guide-container">
        <div class="quiz-text">
            <h2>Le sujet des violences sexuelles vous semble complexe ?</h2>
            <h3>Pas de panique : nos articles sont là pour vous guider et vous donner toutes les clés nécessaires.</h3>
        </div>
          
          <div class="quiz-button">
            <a href="">Se laissez guider<img src="<?php echo get_template_directory_uri(); ?>/img/icon.svg" alt="Petite case cocher et point d'interogation"></a>
            <img class="coeur-img" src="<?php echo get_template_directory_uri(); ?>/img/triangle-guide.svg" alt="coeur rose enthousiaste qui tent les bras pour montrer le bouton">
          </div>
    </div>

  </section>


  <section class="categories-section container">
    <div class="titre-categories">
      <h1>Tout savoir sur les violences sexuelles</h1>
      <a href="">Voir plus d'articles</a>
    </div>
    
    <div class="categories-container">

      <a href="">
        <div class="categorie-div">
          <img src="http://wordpress.test/wp-content/uploads/2025/01/orange.svg" alt="icone de la categorie">
          <h3>Qui sont les victimes de violences sexuelles ?</h3>
        </div>
      </a>
      
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
  <button class="carousel-button prev" onclick="prevSlide()"><img src="<?php echo get_template_directory_uri(); ?>/img/carousel/fleche-gauche.svg" alt="fleche gauche"></button>
  <button class="carousel-button next" onclick="nextSlide()"><img src="<?php echo get_template_directory_uri(); ?>/img/carousel/fleche-droite.svg" alt="fleche droite"></button>
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
