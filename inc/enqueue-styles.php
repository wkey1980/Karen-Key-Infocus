<?php

function karen_key_infocus_setup_styles() {
    wp_enqueue_style( 'style.css', get_stylesheet_directory_uri() . '/dist/theme.css', array(), time(), false );
}
add_action( 'wp_enqueue_scripts', 'karen_key_infocus_setup_styles' );