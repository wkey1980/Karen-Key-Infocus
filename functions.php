<?php

function karen_key_infocus_setup() {
    load_theme_textdomain( 'karen_key_infocus', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    // Register social media & menu locations
    register_nav_menus(
        array(
            'header' => __( 'Header Menu', 'karen_key_infocus' ),
            'footer' => __( 'Footer Menu', 'karen_key_infocus' ),
            'social' => __( 'Social Menu', 'karen_key_infocus' ),
        )
    );


}
add_action( 'after_setup_theme', 'karen_key_infocus_setup' );

// Enqueue css styles
// require get_template_directory() . '/inc/enqueue-styles';

// Enqueue JavaScript Files
// require get_template_directory() . '/inc/enqueue-scripts';
