<?php

function karen_key_infocus_setup_styles() {

    $theme_version = wp_get_theme()->get( 'Version' );
    
    // Enqueue bootstrap CDN // ! Enqueue CDN not working
    // wp_enqueue_style( 'bootstrap', get_template_directory_uri() . 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );

    wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );

    // Enqueue theme.css
    wp_enqueue_style( 'theme.css', get_stylesheet_directory_uri() . '/dist/theme.css', false, $theme_version, 'all' );
}
add_action( 'wp_enqueue_scripts', 'karen_key_infocus_setup_styles' );