<!-- modele index.php représente le modele par défaut  -->
<?php get_header();?><!-- Il va récuperer le header -->
<main>
    <h3>index.php</h3>
<?php if (have_posts()):
    while(have_posts()): the_post();
    the_title('<h1>', '</h1>');
    the_content();
    endwhile;
endif;
?>
</main>
<?php get_footer();?>