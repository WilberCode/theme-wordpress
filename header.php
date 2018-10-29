<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
     <?php wp_head();?>
     <style>
      /* .banner{
         background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center/cover;
        } */
    </style>
</head>
<body>
    <header class="header customizer-bg">
        <div class="toggle-container">
            <div class="nav-toggle" id="nav-toggle"></div>
        </div>
        <div class="header-container" id="header-container">
            <div class="logo">
            Expreso Los Chankas
            </div> 
            <?php wp_nav_menu(array(
                'theme_location'  => 'main-menu',
                'container'       => 'nav',
                'container_class' => 'nav',
                'container_id'    => 'nav',
                'menu_class'      => 'menu',
                'menu_id'         => 'menu'  
            )); ?> 
        </div>
    </header>