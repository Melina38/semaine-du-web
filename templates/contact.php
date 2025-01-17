<?php
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>

Contact HTML
<br>
<aside>
    <h2>Email:</h2>
    <?php the_field(selector: 'email');?>
    <h2>Coordonnées GPS</h2>

    <?php $coordinates = get_field('coordinates');?>
    <p>Latitude: <?php echo($coordinates['latitude']);?> </p>
    <p>Longitude: <?php echo($coordinates['longitude']);?> </p>
    <br>
    <h2>Bureaux</h2>
    <?php $image = get_field(selector: 'image');?>
    <img src="<?php echo($image['sizes']['thumbnail']) ?>"  
    height = "<?php echo($image['sizes']['thumbnail-height']) ?>" 
    width= "<?php echo($image['sizes']['thumbnail-width']) ?>" 
    alt="<?php echo($image['alt']) ?>">
</aside>
<pre>
    <?php  var_dump($image); ?>
</pre>

<br>

<?php

    echo do_shortcode(get_field('formulaire_wpforms'));

?>
<?php get_footer(); ?>