<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class=" transparent no-aside">
        <div class="container_erreur">
            <h1>Erreur 404 </h1>
            <p>Page introuvable, vous pouvez tenter une recherche</p>
            <?php get_search_form(); ?>
            <?php 
            // Afficher le menu secondaire pour les cours
            echo "<div class='menu-cours-erreur'>";
                echo "<h2>Nos choix de cours</h2>";
                wp_nav_menu(array(
                    "menu" => "menu-secondaire-cours", // Nom du menu que vous avez créé pour les cours
                    "container" => "nav",
                ));
                
            echo "</div>";
            // Afficher le menu secondaire pour les notes
            echo "<div class='menu-note-erreur'>";
            echo "<h2>Les notes de cours</h2>";
            wp_nav_menu(array(
                "menu" => "note-wp", // Nom du menu que vous avez créé pour les notes
                "container" => "nav",
            ));
            echo "</div>";  
            ?>
        </div>
</main> 
<?php get_footer(); ?>

