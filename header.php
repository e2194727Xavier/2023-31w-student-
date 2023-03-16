Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@e2194727Xavier 
eddytuto
/
2023-31w
Public
Fork your own copy of eddytuto/2023-31w
Code
Issues
Pull requests
Actions
Projects
Security
Insights
2023-31w/header.php /
@eddypmartin
eddypmartin c14 menu entete debut burger
Latest commit c2b24b8 1 minute ago
 History
 1 contributor
35 lines (34 sloc)  1.18 KB

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body class="site <?= (is_front_page() ? "no-aside" : "");  ?> ">
    <header class="site__entete">  
        <section class="logomenu">
            <?php the_custom_logo(); ?> 
            <div class="menusearch">
                <input type="checkbox" id="chkBurger">
                <?php wp_nav_menu(array(
                    'menu' => 'entete',
                    'container' => 'nav'
                )); ?> 
                <?= get_search_form(); ?>
                <label for="chkBurger" class="burger">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
                </label>   
            </div> 
        </section>
        <h1><a href="<?php  bloginfo('url'); ?>"><?php  bloginfo('name'); ?></a></h1> 
        <h2><?php  bloginfo('description'); ?></h2>
    </header>
    <?php 
    if (is_front_page() == false)
    {
       get_template_part("template-parts/aside");
    }
     ?>
    