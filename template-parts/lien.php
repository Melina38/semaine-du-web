<section class="composant-lien container">
<?php
  //echo('<pre>');
  //var_dump($args);
  //echo('</pre>');
?>
    <a href="<?php echo($args['lien']); ?>" target="_blank"><?php echo($args['texte']); ?>
    <img src="<?php echo($args['image']['url']); ?>" alt="<?php echo $args["image"]["alt"];?>">
  </a>
    

</section>