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
?>