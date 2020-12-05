<?php

function karen_key_infocus_setup_scripts() {

    // wp_enqueue_script( 'bootstrap.bundle.js', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.js' );

    // Enqueue popper.js
    wp_enqueue_script( 'popper.js', get_template_directory_uri() . '/bootstrap/js/popper.js' );

    // Enqueue bootstrap.justify-content-around
    wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array('jquery') );


    
    // Enqueue Popper.js // ! Enqueue CDN not working
    // wp_enqueue_script( 'popper.js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js' );
    // wp_enqueue_script( 'popper.js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js' );

    // Enqueue bootstrap.js // ! Enqueue CDN not working
    // wp_enqueue_script( 'bootstrap.js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' );

    // Enqueue theme.js
    wp_enqueue_script( 'theme.js', get_template_directory_uri() . '/app/js/theme.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'karen_key_infocus_setup_scripts');