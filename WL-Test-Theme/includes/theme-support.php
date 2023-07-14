<?php
/**
 * THEME SUPPORT
 */
if ( ! function_exists( 'wl_theme_setup' ) ) {
    function wl_theme_setup() {
        // THUMBNAIL FOR POSTS
        add_theme_support( 'post-thumbnails' );

        // CUSTOM LOGO SUPPORT
        $logo_width  = 300;
        $logo_height = 100;

        add_theme_support(
            'custom-logo',
            array(
                'height'               => $logo_height,
                'width'                => $logo_width,
                'flex-width'           => true,
                'flex-height'          => true,
                'unlink-homepage-logo' => true,
            )
        );

        add_image_size('single_page_car_image', 1920, 1080, true);
    }
}
add_action( 'after_setup_theme', 'wl_theme_setup' );

// nice dump function
if ( ! function_exists( 'wp_dump' ) ) {
    function wp_dump( ...$params ) {
        echo '<pre style="text-align: left; font-family: \'Courier New\'; font-size: 12px;line-height: 20px;background: #efefef;border: 1px solid #777;border-radius: 5px;color: #333;padding: 10px;margin:0;overflow: auto;overflow-y: hidden;">';
        var_dump( $params );
        echo '</pre>';
    }
}
