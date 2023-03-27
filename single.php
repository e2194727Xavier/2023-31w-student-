<?php
/**
 * The template for displaying all single posts
 */
get_header(); ?>

<main class="site__main">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            if (in_category('cours')) {
                get_template_part('template-parts/single', 'cours');
            } elseif (in_category('note-wp')) {
                get_template_part('template-parts/single', 'note');
            } else {
                get_template_part('template-parts/single', 'erreur');
            }
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>






