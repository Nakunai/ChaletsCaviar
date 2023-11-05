<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
 function my_child_theme_setup() {
 load_child_theme_textdomain( 'fluida', get_stylesheet_directory() . '/languages' );
add_action( 'after_setup_theme', 'my_child_theme_setup' );

add_filter('login_errors', create_function('$a', "return null;"));
remove_action('wp_head', 'wp_generator');

}
?>