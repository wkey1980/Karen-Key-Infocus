<?php

// Widgets
function karen_key_infocus_widgets_init() {

    // Header widget
    register_sidebar(
        array(
            'name' => esc_html__( 'Header', 'karen_key_infocus' ),
            'id' => 'header_widget',
            'description' => esc_html__( 'Add widgets here', 'karen_key_infocus' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );

    // Footer widget
    register_sidebar(
        array(
            'name' => esc_html__( 'Footer', 'karen_key_infocus' ),
            'id' => 'footer_widget',
            'description' => esc_html__( 'Add widgets here', 'karen_key_infocus' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );

    // Sidebar widget
    register_sidebar(
        array(
            'name' => esc_html__( 'Sidebar', 'karen_key_infocus' ),
            'id' => 'sidebar_widget',
            'description' => esc_html__( 'Add widgets here', 'karen_key_infocus' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action( 'widgets_init', 'karen_key_infocus_widgets_init' );