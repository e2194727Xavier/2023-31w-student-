<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?> <!-- Il va ajouter du css, ajouter plusieurs éléments de notre entete sans structurer notre html-->
</head>
<body>
    <header>
        <h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
    </header>
    
