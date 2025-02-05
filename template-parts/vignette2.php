<section class="composant-vignette2 container">

<?php foreach($args['blocs'] as $bloc): ?>
    <div>
        <div>
          <h3><?php echo($bloc['titre']); ?></h3>
          <img src="<?php echo($bloc['image']['url']); ?>" alt="icone de la categorie">
          <p><?php echo($bloc['texte']); ?></p>
        </div>
    </div>
<?php endforeach; ?>
</section>