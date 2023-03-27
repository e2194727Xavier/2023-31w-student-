<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    <h3>Single.php</h3>
    <?php 
    if (have_posts()):
        while(have_posts()): the_post();
            the_title('<h1>','</h1>');
            the_content(); 
            /* in_category() */
            $enseignant = get_field('enseignant');
            $domaine = get_field('domaine');
            if ($enseignant || $domaine ) {
                echo '<div class="prof-dom"><p>Enseignant : ' . $enseignant . '</p>';
                echo '<p>Domaine : ' . $domaine . '</p></div>';
            }
        endwhile;    
    endif;
    ?>   
</main> 
<?php get_footer(); ?>


