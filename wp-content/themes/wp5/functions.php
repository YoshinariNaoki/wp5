<?php
function post_has_archive( $args, $post_type ) {

    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['archive'] = 'archive';
    }
    return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
add_theme_support( 'post-thumbnails' ); 
function custom_excerpt_length( $length ) {
     return 250;	
}	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_theme_support('post-thumbnails');

/**
 * Custom Post Type UIの日本語化ファイルをすでにあるものより優先して読み込ませるようにします。
 */
function override_load_cptui_ja( $override, $domain, $mofile ) {
    if ( 'cpt-plugin' == $domain
        && strrpos( $mofile, WP_PLUGIN_DIR . '/custom-post-type-ui/languages/cpt-plugin-ja.mo' ) === 0 ) {
        load_textdomain( 'cpt-plugin', WP_LANG_DIR . '/plugins/cpt-plugin-ja.mo' );
        return true;
    }
    return $override;
}
add_filter( 'override_load_textdomain', 'override_load_cptui_ja', 10, 3 );

function my_acf_init() {
	if (function_exists('acf_update_setting')) {
		acf_update_setting('remove_wp_meta_box', false);
	}
}
add_action('acf/init', 'my_acf_init');
remove_filter( 'the_content', 'wpautop' );
