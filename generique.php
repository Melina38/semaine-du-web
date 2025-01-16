<?php /* Template Name: generique */ ?>

<?php get_header(); ?>

<div>
    <section>
        <h1> <?php the_title(); ?> </h1>
        <?php the_content(); ?>
        <script>console.log('le js marche avec succes');</script>
    </section>
  </div>
<?php get_footer(); ?>
