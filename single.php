<?php
    // Header
    get_header();
    
    // Composants
    $composants = get_field('composants');
    foreach($composants as $composant) {
        //var_dump($composant['acf_fc_layout']);
        get_template_part('template-parts/'.$composant['acf_fc_layout']);
    }

    // Footer
    get_footer();
?>