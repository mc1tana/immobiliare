<?php 
      get_header();
      the_post();// equivalent a la requete sql qui recupere les info de l'article
      
?>

<h1 class="text-center my-5">  <?php the_title();?>   </h1>
<!-- aficher image article dans un background avec une hauteur de 300ps centré au milieu et prenant tout l'espace  -->
<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                                        $image_url = $large_image_url[0] ?? null;//?? egale à isset($large_image_url[0] )? $large_image_url[0] : null  
                                         ?>
<div class="article-image" style="background-image:url(<?php echo $image_url ?>)">

</div>
<div class="text-center">
    <?php the_content();?>
</div>

<?php get_footer(); ?>
