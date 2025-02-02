<?php get_header(); ?>
<section class="search-result">
    <div class="search-div container">
        <h1>Résultats de recherche pour : <?php echo get_search_query(); ?></h1>
        <?php if (have_posts()) : ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <li class="categorie-article">
                        <a class="lien-article" href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        <?php endif; ?>
                            <h2 class="archive-title"><?php the_title(); ?></h2>
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