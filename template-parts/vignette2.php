<section class="composant-vignette2 container">

<?php foreach($args['blocs'] as $bloc): ?>
    <div>
        <div>
          <img src="<?php echo($bloc['image']['url']); ?>" alt="icone de la categorie">
          <h3><?php echo($bloc['texte']); ?></h3>
        </div>
    </div>
<?php endforeach; ?>
</section>