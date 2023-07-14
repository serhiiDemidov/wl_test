<?php
/**
 * CUSTOM TAXONOMIES
 */

// REGISTER BRAND TAXONOMY FOR CAR CUSTOM POST TYPE
function register_car_brand_taxonomy() {
    $labels = array(
        'name'              => 'Brands',
        'singular_name'     => 'Brand',
        'search_items'      => 'Search Brands',
        'all_items'         => 'All Brands',
        'parent_item'       => 'Parent Brand',
        'parent_item_colon' => 'Parent Brand:',
        'edit_item'         => 'Edit Brand',
        'update_item'       => 'Update Brand',
        'add_new_item'      => 'Add New Brand',
        'new_item_name'     => 'New Brand Name',
        'menu_name'         => 'Brand',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'brand' ),
    );

    register_taxonomy( 'car_brand', 'car', $args );
}
add_action( 'init', 'register_car_brand_taxonomy' );

// // REGISTER COUNTRY TAXONOMY FOR CAR CUSTOM POST TYPE
function register_car_country_taxonomy() {
    $labels = array(
        'name'              => 'Countries',
        'singular_name'     => 'Country',
        'search_items'      => 'Search Countries',
        'all_items'         => 'All Countries',
        'parent_item'       => 'Parent Country',
        'parent_item_colon' => 'Parent Country:',
        'edit_item'         => 'Edit Country',
        'update_item'       => 'Update Country',
        'add_new_item'      => 'Add New Country',
        'new_item_name'     => 'New Country Name',
        'menu_name'         => 'Country',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'country' ),
    );

    register_taxonomy( 'car_country', 'car', $args );
}
add_action( 'init', 'register_car_country_taxonomy' );
