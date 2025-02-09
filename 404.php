<?php
/*
    Template Name: 404
*/
?>

<?php get_header(); ?>
<?php /*
        $groupe_404 = get_field("erreur");
        if ($groupe_404 === null) {
            echo '<p>Le champ ACF "erreur" est introuvable ou vide.</p>';
        } else {
            echo '<pre>'; 
            var_dump($groupe_404);
            echo '</pre>';
        }
        
        var_dump($groupe_404);
        */
?>
<div>
    <section class="erreur-section container">
        <div class="img-div">
            <img src="http://sexoproinfo.com/wp-content/uploads/2025/01/orange.svg" alt="coeur orange brisé qui pleure">
        </div>
        <div class="erreur-container">
            <div class="texte-div">
                <h1>Ooooops ! Cette page n'est pas disponible...</h1>
                <h3>Mais ne t'en fais pas, il y a plein d'autres contenus 
                    super intéressants à découvrir pour proposer un soutien adapté aux jeunes !
                </h3>
            </div>
            <div class="quiz-button">
                <a href="http://sexoproinfo.com/" class="btn">Retourner à l'accueil</a>
                <img class="coeur-img" src="http://sexoproinfo.com/wp-content/uploads/2025/01/coeur-quiz.svg" alt="coeur rose qui montre le bouton">
            </div>
        </div>
    </section>
  </div>
<?php get_footer(); ?>