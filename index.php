<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <title>Mon thème WordPress</title>
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
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                        </ul>
                    </div>
             </div>   
            
        </nav>
        <div class="container">
                <h1 claas="text-center my-4">bienvenu sur le site<?php bloginfo('name'); ?> </h1>
                <p><?php bloginfo('description') ?></p>
        </div>

        
    </body>
</html>