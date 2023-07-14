<?php
/**
 * ENQUEUE STYLES AND SCRIPTS
 */
function enqueue_color_picker_script() {
    wp_enqueue_script( 'color-picker-init', get_template_directory_uri() . '/resources/scripts/modules/color-picker-init.js', array( 'wp-color-picker' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'enqueue_color_picker_script' );
function wl_test_theme_styles() {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'wl_test_theme_styles' );

function wl_test_theme_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'wp-color-picker' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/resources/scripts/main.js', array(), '1.1.0', true  );
}

add_action( 'wp_enqueue_scripts', 'wl_test_theme_scripts' );
