<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <title>Mon thème WordPress</title>
        <?php 
        //permet de changer de style css de wordpress
        wp_head();
        ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>
    <body>
        
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">

                    <a class="navbar-brand" href="#">
                       
                                 <?php bloginfo('name'); ?>
                                


                           
                    
                  </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                                                wp_nav_menu( [
                                'theme_location'  => 'main-menu',
                                'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => '#navbarNav',
                                'menu_class'      => 'navbar-nav ml-auto',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                                                 ] );

                    ?>
             </div>   
            
        </nav>
    
    <div class="container">