<?php
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

wp_enqueue_style( 'style', get_stylesheet_uri() );

function register_menus() {
    register_nav_menu('main-menu',__( 'Main Menu', 'vg-trading' ));
}
add_action( 'init', 'register_menus' );