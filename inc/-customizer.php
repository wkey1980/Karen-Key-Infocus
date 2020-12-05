<?
/**
 * @package karen_key)infocus
 */

function karen_key_infocus_customize_preview_js() {
    wp_enqueue_script('karen_key_infocus_customizer', get_template_directory_uri() . '/testing/customizer.js', array( 'customizer-preview' ), _S_VERSION, true );
}
add_action( 'customizer_preview_init', 'karen_key_infocus_customize_preview_js' );