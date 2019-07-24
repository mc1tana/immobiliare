<?php 
//equivalent d'un include 'header.php'
get_header(); ?>

                <h1 claas="text-center my-4">bienvenu sur le site<?php bloginfo('name'); ?> </h1>
                <p><?php bloginfo('description') ?></p>
                <?php
                    if(have_posts()){//si on a des articles
                        while(have_posts()){
                            the_post();//on parcourt les articles?>
                            <h1><?php the_title(); ?></h1>
                           <!-- the_title(); c'est idem que echo get_the_title() -->

                     <?php   }
                    }
                ?>

<?php 
get_footer();
