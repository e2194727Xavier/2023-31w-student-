<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    <h1>Erreur 404 </h1>
    <p>Page introuvable, vous pouvez tenter une recherche</p>
     <?php get_search_form(); ?>
</main> 
<?php get_footer(); ?>

