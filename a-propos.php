<?php
/*
    Template Name: A propos
*/
?>
<?php get_header(); ?>

  <div class="titre-propos">
        <h1> <?php the_title(); ?> </h1>
  </div>
  <?php
    $blocs = get_field("blocs");
    //echo('<pre>');
    //var_dump($blocs);
    //echo('</pre>');
  ?>
  <main>
    <div class="content container">
    <?php foreach($blocs as $bloc): ?>
        <div>
            <h2><?php echo $bloc["titre"];?></h2>
            <p><?php echo $bloc["texte"];?></p>
        </div>
    <?php endforeach; ?> 
    </div>
</main>
<?php get_footer(); ?>