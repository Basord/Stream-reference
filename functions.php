<?php


add_action('widgets_init','zero_add_sidebar');
function zero_add_sidebar()
{
    register_sidebar(array(
        'id' => 'my_custom_zone',
        'name' => 'Zone supérieure',
        'description' => 'Apparait en haut du site',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}


add_action('init', 'zero_add_menu');
function zero_add_menu()
{
    register_nav_menu('main_menu', 'Menu principal');
}
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}



function Streamreference_scripts(){

wp_enqueue_script( 'menuheader', get_stylesheet_directory_uri() . '/workspace/Stream-reference/wordpress/wp-content/themes/Stream-reference/js/jquery-1.11.3.min.js',array() );
 
wp_enqueue_script( 'jquery',get_stylesheet_directory_uri() . '/workspace/Stream-reference/wordpress/wp-content/themes/Stream-reference/js/menuheader.js',array() );
 
}
 
add_action( 'wp_enqueue_scripts', 'Streamreference_scripts' );