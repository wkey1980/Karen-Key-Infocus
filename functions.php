<?php
/**
 * karen_key_infocus functions & definitions
 *
 * @package karen_key_infocus
 */
?>
<?php

function karen_key_infocus_setup() {

    add_theme_support( 'automatic-feed-links' );

    // Custom logo
    // add_theme_support( 'custom-logo' );

    // Custom Header
    // add_theme_support(
    //     'custom-header',
    //     array(
    //         'default-image' => '',
    //     )
    // );


    // Custom Background
    // add_theme_support(
    //     'custom-background',
    //     array(
    //         'default-color' => '#ffffff',
    //         'default-image' => '',
    //     )
    // );


}
add_action( 'after_setup_theme', 'karen_key_infocus_setup' );

// Custom logo function
function karen_key_infocus_custom_logo_setup() {
    $args = array(
        'width' => '200',
        'height' => '200',
        'flex-width' => true,
        'flex-height' => true,
        'header-text' => array(
            'site-title',
            'site-description'
        ),
        'uplink-homepage-logo' => true,
    );
    add_theme_support( 'custom-logo', $args );
}
add_action( 'after_setup_theme', 'karen_key_infocus_custom_logo_setup' );





// Loads customizer.php file
// require get_template_directory() . '/inc/customizer.php';



// function karen_key_infocus_custom_header_setup() {
//     add_theme_support( 'custom-header', apply_filters( 'karen_key_infocus_custom_header_args', array(
//         'default-image' => '',
//         'default-text-color' => 'ff0000',
//         'width' => '',
//         'height' => '',
//         'flex-width' => false,
//         'flex-height' => false,
//         'uploads' => true,
//     )));
// }
// add_action( 'after_setup_theme', 'karen_key_infocus_custom_header_setup' );




?>