<?php
/**
 * Template name: Evenement
 *
 */
?>

<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail("thumbnail")?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p>L'adresse de l'evénement : <?php the_field('adresse'); ?></p>
<p>La date : <?php the_field('date_de_levenement')  ?> </p>   
<p>L'évènement commence à <?php the_field('heure')  ?> </p>  
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();