<?php
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

wp_enqueue_style( 'style', get_stylesheet_uri() );

function register_menus() {
    register_nav_menu('main-menu',__( 'Main Menu', 'vg-trading' ));
}
add_action( 'init', 'register_menus' );

function add_slug_body_class( $classes ) {
    $id = get_current_blog_id();
    $current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
    $slug = $current_page->post_name;
    $classes[] = 'page-'.$slug;
    $classes[] = 'site-id-'.$id;
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );