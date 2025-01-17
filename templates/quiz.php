<?php
/*
    Template Name: Quiz
*/
?>

<?php get_header(); ?>
<?php $quiz_list = get_field('quiz_list'); var_dump($quiz_list); ?>
<?php foreach($quiz_list as $quiz): ?>
    <h2><?php echo($quiz['title']); ?></h2>
    <iframe src="<?php echo($quiz['quiz_url']); ?>" frameborder="0"></iframe>
<?php endforeach; ?>
<?php get_footer(); ?>