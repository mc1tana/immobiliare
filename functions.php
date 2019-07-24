<?php 
    function immobiliare_enqueue_styles() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
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