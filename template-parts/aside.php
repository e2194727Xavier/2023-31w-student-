    <!-- aside avec menu  -->
<aside class="site__aside">
    <h3>Menu secondaire</h3>

    <?php
        if (is_page_template('template-evenement.php')) {
            // Afficher le menu secondaire pour les événements
            wp_nav_menu(array(
                "menu" => "evenement", // Nom du menu que vous avez créé pour les événements
                "container" => "nav",
            ));
        } else if (in_category('cours')) {
            // Afficher le menu secondaire pour les cours
            wp_nav_menu(array(
                "menu" => "menu-secondaire-cours", // Nom du menu que vous avez créé pour les cours
                "container" => "nav",
            ));
        } else {
            // Afficher le menu "note-wp"
          
            wp_nav_menu(array(
                "menu" => "note-wp", // Nom du menu que vous avez créé pour les notes
                "container" => "nav",
            ));
        }
    ?>

</aside>