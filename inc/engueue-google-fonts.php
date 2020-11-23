<?php
// Enqueue google fonts | font-family: 'Caveat', cursive;
function karen_key_infocus_google_fonts() {
    wp_enqueue_style( 'karen_key_infocus_google_fonts', 'https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap', false );
    // ? add more goiogle fonts here using above enqueue code.
}
add_action( 'wp_enqueue_scripts', 'karen_key_infocus_google_fonts' );