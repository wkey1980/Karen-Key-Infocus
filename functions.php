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
    add_theme_support( 'custom-logo' );

    // Custom Header
    // add_theme_support(
    //     'custom-header',
    //     array(
    //         'default-image' => '',
    //     )
    // );


    // Custom Background
    add_theme_support(
        'custom-background',
        array(
            'default-color' => '#ffffff',
            'default-image' => '',
        )
    );


}
add_action( 'after_setup_theme', 'karen_key_infocus_setup' );

// Loads customizer.php file
// require get_template_directory() . '/inc/customizer.php';


?>