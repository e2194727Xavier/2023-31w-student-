<?php
/**
 *Template part pour afficher les articles individuels dans la catégorie note-wp
 */
?>

<article class="note-info">

    <?php
    $titre = get_the_title();
    $titre = substr(str_replace("-", " ", get_the_title()), 3); //enlever les "-" 
    ?>

    <h1><?= ucfirst($titre); ?></h1>

    <div>
    <?php the_content(); ?>
    </div>
</article>



