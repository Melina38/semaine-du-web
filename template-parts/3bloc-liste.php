<section class="composant-3bloc-liste container">
  <?php
  echo('<pre>');
  var_dump($args);
  echo('</pre>');
  ?>
  <?php foreach($args['blocs'] as $bloc): ?>
    <div>
        <div>
          <h3><?php echo($bloc['titre']); ?></h3>
          <ul>
            <?php echo($bloc['contenu']); ?>
          </ul>
        </div>
    </div>
  <?php endforeach; ?>
</section>