<!-- modele index.php représente le modele par défaut  -->
<?php get_header(); ?><!-- Il va récuperer le header -->
<main>
    <code>front-page.php</code>
    <h3>index.php</h3>
    <section class="blocflex">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
                //the_title('<h1>', '</h1>');
                //the_permalink();
                /* ============== */
                //the_content();
                //the_excerpt();
        ?>
                <a href="<?php the_permalink(); ?>">
                    <article>
                            <h3><?= get_the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 4); ?></p> <!-- Le nombre de mot que je veux après la premiere virgule, le troisieme arguement est optionnel  -->
                    </article>
                </a> 
            <?php endwhile; ?>
        <?php endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>