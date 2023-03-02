<!-- modele index.php représente le modele par défaut  -->
<?php get_header(); ?><!-- Il va récuperer le header -->
<main>
    <code>front-page.php</code>
   <!--  <h3>index.php</h3> -->
    <section class="blocflex">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
                //the_title('<h1>', '</h1>');
                //the_permalink();
                /* ============== */
                //the_content();
                //the_excerpt();
        ?>
                <?php get_template_part("template-parts/categorie","note-wp")?>
            <?php endwhile; ?>
        <?php endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>