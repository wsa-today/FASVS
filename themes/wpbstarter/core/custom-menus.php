<?php
add_action( 'after_setup_theme', 'register_my_menu' );

function register_my_menu() {
    register_nav_menus(
        array(
            'fasvs_menu' => __( 'FASVS Menu', 'wpbstarter' ),
            'fasvs_menu_pages' => __( 'FASVS Menu(Pages)', 'wpbstarter' ),
        )
    );
}
?>