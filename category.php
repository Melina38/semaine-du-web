
<?php 

get_header(); 

$category = get_category( get_query_var( 'cat' ) );
?>

<div>
    <section class="container">
        <h1 class="titre-categorie container"> <?php echo $category->name; ?> </h1>
        <h3 class="container">Identifiez, comprenez et accompagnez les victimes de violences sexuelles
        et sachez analyser le profil et les comportements des auteurs</h3>
        <?php 

        

        $cat_id = $category->cat_ID;

        
        
        $posts = get_posts([
            'category' => $cat_id
        ]); 
        


        foreach($posts as $post){
            //echo '<div class="article-preview">';
            //echo '<img src="'. get_the_post_thumbnail_url($post->ID).'" alt="image de l\'article">';
            //echo '<h2 class="archive-title">'.$post->post_title.'</h2>';
            //echo '</div>';
        }

        foreach ($posts as $post):
            setup_postdata($post);
            var_dump($post);
         ?>
            <article>
                <section class="categories-article-section ">
                    <div class="categorie-article-div">
                        <a class="lien-article" href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <h3 class="archive-title"><?php the_title(); ?></h3>
                        </a>
                    </div>
                </section>
                
                
            
            </article>
        <?php
        endforeach;
        
        
        ?> 
        <script>console.log('le js marche avec succes');</script>
    </section>
  </div>
<?php get_footer(); ?>
