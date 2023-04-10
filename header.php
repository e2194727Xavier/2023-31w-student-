<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-PzUGIyBXXexeiZJW8VnU6H5U6ZuQLlHfW7J75rNR+5r5VUK+NKam8OQWZ/w9OZ3NayjK1yiD59l//LMJhRyGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta author="X to the Z" >
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body class="custom-background site <?= (is_front_page() ? "no-aside" : "");  ?> ">
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
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=FFFFFF" width="32" height="32">
                </label> 
                <label for="chkBurger" class="fermer">
                <img src="https://s2.svgbox.net/materialui.svg?ic=close&color=FFFFFF" width="32" height="32">
                </label>  
            </div> 
        </section>
        <?php
            $classe="";
            if (is_front_page() == false){$classe="invisible";}
        ?>
        <h1 class="site__titre <?=$classe?>"><a href="<?php  bloginfo('url'); ?>"><?php  bloginfo('name'); ?></a></h1> 
        <h2 class="site__soustitre <?=$classe?>"><?php  bloginfo('description'); ?></h2>
    </header>
    <?php 
    if (is_front_page() == false)
    {
       get_template_part("template-parts/aside");
    }
     ?>