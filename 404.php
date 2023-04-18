<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    <div class="container_erreur">
        <h1>Erreur 404 </h1>
        <p>Page introuvable, vous pouvez tenter une recherche</p>
         <?php get_search_form(); ?>
         <?php 
        // Afficher le menu secondaire pour les cours
        wp_nav_menu(array(
            "menu" => "menu-secondaire-cours", // Nom du menu que vous avez créé pour les cours
            "container" => "nav",
        ));
        
        // Afficher le menu secondaire pour les notes
        wp_nav_menu(array(
            "menu" => "note-wp", // Nom du menu que vous avez créé pour les notes
            "container" => "nav",
        ));
        ?>
    </div>
</main> 
<?php get_footer(); ?>

