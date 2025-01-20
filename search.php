<?php get_header(); ?>
<section class="search-result">
    <div class="container">
        <h1>Résultats de recherche pour : <?php echo get_search_query(); ?></h1>
        <?php if (have_posts()) : ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <!--<p><?php //the_excerpt(); ?></p>-->
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p>Aucun résultat trouvé</p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>