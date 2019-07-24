<?php 
    function immobiliare_enqueue_styles() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_script( 'jquery',"https://code.jquery.com/jquery-3.3.1.slim.min.js",[],false, true );
        wp_enqueue_script( 'poper',"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js",[],false, true  );
        wp_enqueue_script( 'bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",[],false, true  );

        
//         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
// <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
// <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    }
    //on attache la fonction 'immobiliare_enquete_styles' au hook 'wp_enqeue_scripts'
    add_action( 'wp_enqueue_scripts', 'immobiliare_enqueue_styles' );
//on crée l'emplacement du menu
    function register_my_menu() {
        register_nav_menu('main-menu', 'Menu principal');
    }
    
    add_action( 'init', 'register_my_menu' );
//registre custom navigation
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
//image à la une 
add_theme_support( 'post-thumbnails' );

function register_housing(){

    register_post_type('housing',[
       
                'label' => 'logements',
                'labels' => [
                    'name' => 'logements',
                    'singular_name' => 'logement',
                    'all_items' => 'Tous les logements',
                    'add_new_item' => 'Ajouter un logement',
                    'edit_item' => 'Éditer le logement',
                    'new_item' => 'Nouveau logement',
                    'view_item' => 'Voir le logement',
                    'search_items' => 'Rechercher parmi les logements',
                    'not_found' => 'Pas de logement trouvé',
                    'not_found_in_trash' => 'Pas de logement dans la corbeille'
                ],
                'public' => true,
                'supports' => ['title', 'editor', 'author', 'thumbnail'],
                'has_archive' => true,
                'show_in_rest' => true, // Si on veut activer Gutenberg
            ]);
       
}

//ajout des annonces

add_action('init','register_housing');
