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
      <div class="quiz-text">
        <h2><?php echo $quiz_groupe["titre"];?></h2>
        <h3><?php echo $quiz_groupe["sous-titre"];?></h3>
      </div>
      
      <div class="quiz-button">
        
        <a href="<?php echo $quiz_groupe["lien-bouton"]["url"];?>"
        ><?php echo $quiz_groupe["lien-bouton"]["title"];?>
        <img src="<?php echo $quiz_groupe["bouton-image"]["url"];?>" alt="<?php echo $quiz_groupe["bouton-image"]["alt"];?>"></a>
        <img class="coeur-img" src="<?php echo $quiz_groupe["image"]["url"];?>" alt="<?php echo $quiz_groupe["image"]["alt"];?>">
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
            
            <a href="
              <?php echo $guide_groupe["lien-bouton"]["url"];?>">
              <?php echo $guide_groupe["lien-bouton"]["title"];?>
              <img src="<?php echo $guide_groupe["image-bouton"]["url"];?>" alt="<?php echo $guide_groupe["image-bouton"]["alt"];?>">
            </a>
            <img class="coeur-img" src="<?php echo $guide_groupe["image"]["url"];?>" alt="<?php echo $guide_groupe["image-bouton"]["alt"];?>">
          </div>
    </div>

  </section>

  <?php
    $categories = get_field("categories");
    //echo('<pre>');
    //var_dump($categories);
    //echo('</pre>');
  ?>
  <?php foreach($categories as $category): ?>
    <section class="categories-section container" id="guide">
      <div class="titre-categories">
        <h1><?php echo $category["titre"];?></h1>
        <a href="<?php echo $category["lien"]["url"];?>"><?php echo $category["lien"]["title"];?></a>
      </div>
      <div class="categories-container">
      <?php foreach ($category['contenu'] as $element): ?>
          <a href="<?php echo ($element["lien-article"]["url"]);?>">
            <div class="categorie-div">
              <img src="<?php echo ($element['image']['url']);?>" alt="<?php echo ($element['image']['alt']);?>">
              <h3><?php echo ($element['sous-titre']);?></h3>
            </div>
          </a>      
      <?php endforeach; ?>      
    </section>
  <?php endforeach; ?>


  <?php
// Obtenir les objets de catégorie
$category_psychosexuel = get_category_by_slug('developpement-psychosexuel-de-lenfant');
$category_violences = get_category_by_slug('violences-sexuelles');
$category_genre = get_category_by_slug('sexualite_et_genre');
$category_accompagnement = get_category_by_slug('accompagnement');
$category_loi = get_category_by_slug('la-loi');
$category_outils = get_category_by_slug('les-outils');

// Obtenir les liens des catégories
$category_psychosexuel_link = get_category_link($category_psychosexuel->term_id);
$category_violences_link = get_category_link($category_violences->term_id);
$category_genre_link = get_category_link($category_genre->term_id);
$category_accompagnement_link = get_category_link($category_accompagnement->term_id);
$category_loi_link = get_category_link($category_loi->term_id);
$category_outils_link = get_category_link($category_outils->term_id);
?>
<?php
    $carrousel = get_field("carrousel");
    //echo('<pre>');
    //var_dump($carrousel);
    //echo('</pre>');
  ?>
<section class="carousel-container">


  <section class="carousel-section container">
      <div>
        <h2><?php echo $carrousel["titre"];?></h2>
        <h3><?php echo $carrousel["sous-titre"];?></h3>
      </div>
  </section>
      <div>
        <div class="carousel">
            <div class="carousel-item">
                <a class="lien-carousel" href="<?php echo esc_url($category_psychosexuel_link); ?>">
                    <h2>Développement psychosexuel</h2>
                    <img src="https://www.sexoproinfo.com/wp-content/uploads/2025/01/psychosexuel.svg" alt="cerveau rose">
                </a>
            </div>
            <div class="carousel-item">
                <a class="lien-carousel" href="<?php echo esc_url($category_violences_link); ?>">
                    <h2>Violences sexuelles</h2>
                    <img src="https://www.sexoproinfo.com/wp-content/uploads/2025/01/violences.svg" alt="coeur violet brisé">
                </a>
            </div>
            <div class="carousel-item">
                <a class="lien-carousel" href="<?php echo esc_url($category_genre_link); ?>">
                    <h2>Sexualité et genre</h2>
                    <img src="https://www.sexoproinfo.com/wp-content/uploads/2025/01/sexualite.svg" alt="symbole sexe féminin et masculin">
                </a>
            </div>
            <div class="carousel-item">
                <a class="lien-carousel" href="<?php echo esc_url($category_accompagnement_link); ?>">
                    <h2>Accompagnement</h2>
                    <img src="https://www.sexoproinfo.com/wp-content/uploads/2025/01/accompagnement.svg" alt="couer rose avec un pansement">
                </a>
            </div>
            <div class="carousel-item">
                <a class="lien-carousel" href="<?php echo esc_url($category_loi_link); ?>">
                    <h2>La loi</h2>
                    <img src="https://www.sexoproinfo.com/wp-content/uploads/2025/01/loi.svg" alt="balance de justice">
                </a>
            </div>
            <div class="carousel-item">
                <a class="lien-carousel" href="<?php echo esc_url($category_outils_link); ?>">
                    <h2>Outils</h2>
                    <img src="https://www.sexoproinfo.com/wp-content/uploads/2025/01/outils.svg" alt="Outils">
                </a>
            </div>
      </div>
    </div>
    </section> 




<?php get_footer(); ?>
