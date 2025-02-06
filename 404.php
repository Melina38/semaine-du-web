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
    <section class="404-section conatiner">
        <div class="img-div">
            <img src="" alt="">
        </div>
        <div class="404-container">
            <div class="texte-div">
                <h1>Ooooops ! Cette page n'est pas disponible...</h1>
                <h3>Mais ne t'en fais pas, il y a plein d'autres contenus 
                    super intéressants à découvrir pour proposer un soutien adapté aux jeunes !
                </h3>
            </div>
            <div class="button-div">
                <a href="" class="btn">Retour à l'accueil</a>
                <img src="" alt="">
            </div>
        </div>
    </section>
  </div>
<?php get_footer(); ?>