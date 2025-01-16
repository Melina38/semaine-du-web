<section class="composant-bloc-image-texte container">
<?php
  //echo('<pre>');
  //var_dump($args);
  //echo('</pre>');
?>
    
    <img src="<?php echo $args["image"]["url"];?>" alt="personnage coeur rose">
    
    <div>
        <p><?php echo($args['texte']); ?></p>
    </div>
</section>