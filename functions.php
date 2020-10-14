<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


//Includere fisiere in functions.php

//Functie pentru includerea fisierelor
$roots_includes = array(
    //se adauga calea catre fiecare fisier  '/folder/fisier.php',
    '/shortcodes/wfm_test.php',
    '/shortcodes/categorii_fermieri.php',
    '/cpt/fermieri.php',
    '/custom-functions/sort_terms_hierarchally.php'

);

foreach ($roots_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error("Eroare la localizare fisier `$file` pentru includere!", E_USER_ERROR);
    }

    require_once $filepath;
}
unset($file, $filepath);