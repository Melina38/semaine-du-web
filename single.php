<?php
    // Header
    get_header();
    
    // Composants
    $composants = get_field('composants');
    foreach($composants as $composant) {
        get_template_part('template-parts/'.$composant['acf_fc_layout'], null, $composant);
    }

    // Footer
    get_footer();
?>