<?php

if ( !isset( $content_width ) )
    $content_width = 800; // in pixels

if ( ! function_exists( 'karen_key_infocus_setup' ) ) :

function karen_key_infocus_setup() {
    load_theme_textdomain( 'karen_key_infocus', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    // Register social media & menu locations
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu', 'karen_key_infocus' ),
            'footer-menu' => __( 'Footer Menu', 'karen_key_infocus' ),
            'mobile-menu' => __( 'Mobile Menu', 'karen_key_infocus' ),
            'social-menu' => __( 'Social Menu', 'karen_key_infocus' ),
        )
    );
}
endif;

add_action( 'after_setup_theme', 'karen_key_infocus_setup' );


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );





// Register Custom Navigation Walker
// require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';



// Enqueue Styles & Scripts
// require get_template_directory() . '/inc/enqueue.php';


// Enqueue css styles
require get_template_directory() . '/inc/enqueue-styles.php';

// Enqueue JavaScript Files
require get_template_directory() . '/inc/enqueue-scripts.php';

// Enqueue widgets
require get_template_directory() . '/inc/widgets.php';

// Enqueue Google fonts
// require get_template_directory() . '/inc/engueue-google-fonts.php';
