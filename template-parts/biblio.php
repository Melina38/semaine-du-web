<?php
    
    //echo('<pre>');
    //var_dump($args);
    //echo('</pre>');
  ?>



<section class="biblio-section container">
        <button id="toggleBibliography" onclick="toggleBibliography()">
        <?php echo($args['titre']); ?>
            <img id="arrowIcon" 
            src="<?php echo($args['image']['url']); ?>" 
            alt="<?php echo($args['image']['alt']); ?>" class="arrow">
        </button>
        
        
        <div id="bibliography" class="hidden">
            <ul>
                <?php foreach($args['sources'] as $sources): ?>
                <li><a href="<?php echo($sources['source']['url']); ?>" ><?php echo($sources['source']['title']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        
</section>
    <script src="biblio.js"></script>