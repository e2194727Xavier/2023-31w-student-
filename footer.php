<?php

/**
 * Template footer.php
 */
?>
<footer class="site__footer">
    <section class="footer__widget">
        <div><?php dynamic_sidebar('pied-page-1'); ?></div>
        <div><?php dynamic_sidebar('pied-page-2'); ?></div>
        <div><?php dynamic_sidebar('pied-page-3'); ?></div>
    </section>
    <section class="footer__lien">
        <div><?php wp_nav_menu(array(
                    "menu" => "lien",
                    "container" => "nav",
                    "container-class" => "footer-nav"
                )); ?></div>
    </section>
    <div class="footer__infoPerso">
        <?php the_custom_logo(); ?>
    </div>

</footer>
<?php wp_footer(); ?>
</body>
