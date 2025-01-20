<?php
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>


<section class="contact container">
    <h1>Contact</h1>
    <h3>Une question ? Une suggestion ? Contactez moi !</h3>

    <?php

    echo do_shortcode(get_field('formulaire_wpforms'));

    ?>
</section>

<br>


<?php get_footer(); ?>