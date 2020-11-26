<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary">
            <?php esc_html_e( 'Skip to content', 'karen_key_infocus' ); ?>
        </a>
        <header id="masthead" class="header">
            <div class="site-branding">
                <nav class="navbar navbar-light bg-light">
                    <h1 class="header__site-title">
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    </h1> <!-- put into navbar branding -->
                </nav>
            </div><!-- .site-branding -->






            <nav id="site-navigation" class="main-navigation">

            <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
        <?php
        // wp_nav_menu( array(
        //     'theme_location'    => 'header-menu',
        //     'depth'             => 2,
        //     'container'         => 'div',
        //     'container_class'   => 'collapse navbar-collapse',
        //     'container_id'      => 'bs-example-navbar-collapse-1',
        //     'menu_class'        => 'nav navbar-nav',
        //     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        //     'walker'            => new WP_Bootstrap_Navwalker(),
        // ) );
        ?>
    </div>
</nav>




<!-- TESTING NAV WALKER -->
<div class="container">
            <!-- <nav class="navbar navbar-expand-xl p-0">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span> -->
                </button>

                <?php
                // wp_nav_menu(array(
                // 'theme_location'    => 'header-menu',
                // 'container'       => 'div',
                // 'container_id'    => 'main-nav',
                // 'container_class' => 'collapse navbar-collapse justify-content-start',
                // 'menu_id'         => false,
                // 'menu_class'      => 'navbar-nav',
                // 'depth'           => 3,
                // 'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                // 'walker'          => new wp_bootstrap_navwalker()
                // ));
                ?>

            <!-- </nav> -->
</div>

<nav>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <ul class="dropdown-menu">
        <?php
            wp_nav_menu(
                array(
                    'theme_location'    => 'header-menu',
                    'container'       => 'div',
                    'container_id'    => '',
                    'container_class' => '',
                    'menu_id'         => false,
                    'menu_class'      => '',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                )
            );
        ?>
        </ul>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>
</nav>






            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->