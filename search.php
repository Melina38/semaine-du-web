<?php get_header(); ?>
<section class="search-result">
    <div class="container">
        <h1>Résultats de recherche pour : <?php echo get_search_query(); ?></h1>
        <?php if (have_posts()) : ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a class="lien-article" href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <h3 class="archive-title"><?php the_title(); ?></h3>
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