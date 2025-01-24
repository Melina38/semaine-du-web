<?php
/*
    Template Name: Quiz
*/
?>

<?php get_header(); ?>
<?php $quiz_list = get_field('quiz_list'); var_dump($quiz_list); ?>
<section class="quiz-section container">
    <div>
        <h1>Quiz</h1>
        <h3>Testez vos connaissances grâce aux quiz !</h3>
    </div>
    
    <?php foreach($quiz_list as $quiz): ?>
        <div class="quiz">
            <h1><?php echo($quiz['title']); ?></h1>
            <iframe src="<?php echo($quiz['quiz_url']); ?>" frameborder="0" allowfullscreen></iframe>
        </div>

    <?php endforeach; ?>
</section>

<?php get_footer(); ?>