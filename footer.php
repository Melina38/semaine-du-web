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

  <footer>
    <section class="boite container">

        <div class="logo">
            <a href="http://sexoproinfo.com/"><img src="<?php echo get_template_directory_uri();?>/img/logo-footer.svg" alt="logo"></a>
        </div>

        <div class="categories">

            <ul class="col-gauche">
                <li><a href="<?php echo esc_url($category_psychosexuel_link); ?>">Développement <br> psychosexuel</a></li>
                <li><a href="<?php echo esc_url($category_violences_link); ?>">Violences sexuelles</a></li>
                <li><a href="<?php echo esc_url($category_outils_link); ?>">Outils</a></li>
            </ul>

            <ul class="col-droite">
                <li><a href="<?php echo esc_url($category_genre_link); ?>">Sexualité et genre</a></li>
                <li><a href="<?php echo esc_url($category_accompagnement_link); ?>">Accompagnement</a></li>
                <li><a href="<?php echo esc_url($category_loi_link); ?>">La loi</a></li>
            </ul>

            

        </div>

        <div class="autre">
            <ul class="col-quiz">
                <li><a href="http://sexoproinfo.com/index.php/quiz/">Quiz</a></li>
                </ul>
            <ul class="contact">
                <li><a href="http://sexoproinfo.com/index.php/contact/">Me contacter</a></li>
                <li><a href="http://sexoproinfo.com/index.php/a-propos/">À propos</a></li>
            </ul>

        </div>
    </section>
    <div class="legal-container">
        <ul>
            <li><a href="http://sexoproinfo.com/index.php/mentions-legales/">Mentions légales</a></li>
            
            <li>
                <p class="texte">@2025 Étudiants MMI</p>
            </li>
        </ul>
    </div>




</footer>
  <?php wp_footer(); ?>
</body>
</html>