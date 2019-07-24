<?php 
//equivalent d'un include 'header.php'
get_header(); ?>

                <h1 claas="text-center my-4">bienvenu sur le site<?php bloginfo('name'); ?> </h1>
                <p><?php bloginfo('description') ?></p>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4"></div>
                    <div class="col-4"></div>

                </div>
                <a href="<?php the_permalink();?> ">
                <div class="row">
                <?php
                    if(have_posts()){//si on a des articles?>
                        
                       <?php while(have_posts()){
                            the_post();//on parcourt les articles?>
                            <div class="col-4">
                                <a class="card-link" href="<?php the_permalink();?> ">

                                <div class="card shadow mb-4">

                                <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                                        $image_url = $large_image_url[0] ?? null;//?? egale à isset($large_image_url[0] )? $large_image_url[0] : null  
                                        echo '<img  src="'.$image_url.'">'; ?>
                                    <div class="card-body">
                                            <h1 ><?php the_title(); ?></h1>
                                            
                                            

                                            

                                    </div>
                                    <div class="card-footer">
                                        <p> <?php echo get_the_date(); ?> </p>
                                    
                                    </div>

                                       
                                    
                                </div>
                                </a>
                            </div>
                
                           <!-- the_title(); c'est idem que echo get_the_title() -->

                     <?php   }
                    }
                ?>
                </div> 

<?php 
get_footer();
