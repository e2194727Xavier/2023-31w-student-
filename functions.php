<?php
// Enfiler la feuille de style
function ajouter_styles() {
    wp_enqueue_style('31w-style-principal',  // l'id de la feuille de style
    get_template_directory_uri() . '/style.css', //addresse url de la feuille de style
    array(), // les dépendances avec les autres feuilles de style
    filemtime(get_template_directory() . '/style.css')); // La version de la derniere feuille de style 
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

/* ------------------------------------------------------------add theme support */
add_theme_support( 'html5', 
                array( 'search-form', 
                        'gallery',
                        'caption' ) );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', 
                    array(
                        'height' => 150,
                        'width'  => 150,
                            ) );

                    

function enregistrement_des_menus(){
    register_nav_menus( array(
        'menu_entete' =>  'Menu entête' ,/* fonction de traduction */
        'menu_footer'  => 'Menu pied de page' ,
        ) );
    }
    add_action( 'after_setup_theme', 'enregistrement_des_menus', 0 );

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal($query)
{
    if ($query->is_home() // si page d'accueil 
         && $query->is_main_query() // si requête principale
         && !is_admin()) { // nom tableau de bord
        $query->set('category_name', 'note-wp'); // filtre les articles de catégorie "note-wp
        $query->set('orderby', 'title'); // order by title
        $query->set('order', 'ASC'); // ordre ascendant
    }
}
add_action('pre_get_posts', 'cidweb_modifie_requete_principal');
