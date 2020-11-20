<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <a clas="skip-link screen-reader-text" href="#primary">
            <?php esc_html_e( 'Skip to content', 'karen_key_infocus' ); ?>
        </a>

        <header id="masthead">
            <div class="site-branding">

                <?php
                // ! will add wordpress branding here.
                ?>

            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <?php wp_nav_menu(
                    array(
                        'theme-location' => 'primary',
                        'menu_id' => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->