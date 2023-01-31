<?php
// Enfiler la feuille de style
function ajouter_styles() {
    wp_enqueue_style('31w-style-principal',  // l'id de la feuille de style
    get_template_directory_uri() . '/style.css', //addresse url de la feuille de style
    array(), // les dépendances avec les autres feuilles de style
    filemtime(get_template_directory() . '/style.css')); // La version de la derniere feuille de style 
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

