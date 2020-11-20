
        <footer id="colophon" class="site-footer">

            <div class="site-info">
                <a href="<?php echo esc_url(__( 'https://wordpress.org/', 'karen_key_infocus' ) ); ?>">
                    <?php
                    printf( esc_html__( 'Proudly powered by %s', 'karen_key_infocus' ), 'WordPress' );
                    ?>
                </a>
                <span class="sep"> | </span>
                    <?php
                    printf( esc_html__( 'Themw: %1$s by %2$s', 'karen_key_infocus' ), 'karen_key_infocus', '<a href="http://underscores.me/">Underscores.me<?a>' );
                    ?>
            </div><!-- .site-info -->

        </footer><!-- #colophon -->
    </div><!-- #page -->

    <?php wp_footer(); ?>
</body>
</html>
