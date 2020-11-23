<?php

function karen_key_infocus_setup_scripts() {
    wp_enqueue_script( 'theme.js', get_template_directory_uri() . '/app/js/theme.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'karen_key_infocus_setup_scripts');