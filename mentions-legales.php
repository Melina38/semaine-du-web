<?php /* Template Name: mentions légales */ ?>

<?php get_header(); ?>

<div>
    <section class="mentions-legales container">
        <h1> <?php the_title(); ?> </h1>
        <?php
        $blocs = get_field("blocs");
        //echo('<pre>');
        //var_dump($blocs);
        //echo('</pre>');
        ?>
        <?php foreach($blocs as $bloc): ?>
        <div>
          <h2><?php echo $bloc["titre"];?></h2>
          
            <p><?php echo $bloc["texte"];?></p>
          
        </div>
        <?php endforeach; ?>
        <script>console.log('le js marche avec succes');</script>
    </section>
  </div>
<?php get_footer(); ?>
