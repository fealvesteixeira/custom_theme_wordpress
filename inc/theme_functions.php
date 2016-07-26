<?php

/* Disable WordPress Admin Bar for all users but admins. */

show_admin_bar(false);

add_action( 'after_setup_theme', 'register_theme_menu' );
function register_theme_menu() {
    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'Top'   => __( 'Top primary menu', 'theme_unius' ),
        'Footer' => __( 'Footer menu', 'theme_unius' ),
    ) );
}
