<?php
// Equivalent d'un include 'header.php'
get_header(); ?>
        <div class="container">
            <h1>Bienvenue sur le site <?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
            
            
            <div class="row">
            <?php
                if(have_posts())    // Si on a des articles
                {
                    while(have_posts())     // On parcourt les articles
                    {
                        the_post();?>
                        
                        <div class="col-4">
                        <a class="card-link" href=<?php the_permalink();?>>
                            <div class="card shadow mb-4">
                                <?php 
                                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                                $image_url = $large_image_url[0] ?? null;
                                echo '<img src="'.$image_url.'">'; ?>
                                
                                <div class="card-body">
                                    <h2 class="card-title">
                                        <?php the_title(); ?>
                                    </h2>

                                    <p> Surface : <?php echo get_post_meta($post->ID, 'surface', true); ?> m² </p>
                                    <p> Prix : <?php echo get_post_meta($post->ID, 'prix', true); ?> € </p>
                                    
                                    <p><?php the_content()?></p>
                                    <div class="card-footer">
                                    <p><?php echo get_the_date() ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
              <?php }
                }
            
            ?>
            </div>
        </div>
<?php 
// On inclue le footer
get_footer(); ?>