<section class="composant-vignettes container">
<?php
  //echo('<pre>');
  //var_dump($args);
  //echo('</pre>');
  ?>
<?php foreach($args['blocs'] as $bloc): ?>
    <div>
        <div class="categorie-div">
          <img src="<?php echo($bloc['image']['url']); ?>" alt="<?php echo $blocs["image"]["alt"];?>">
          <p><?php echo($bloc['texte']); ?></p>
        </div>
    </div>
<?php endforeach; ?>
    
</section>