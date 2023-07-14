<?php
/**
 * CUSTOM POST TYPES
 */


// REGISTER CUSTOM POST TYPE CAR
function register_car_post_type() {
    $labels = array(
        'name'               => 'Cars',
        'singular_name'      => 'Car',
        'menu_name'          => 'Cars',
        'name_admin_bar'     => 'Car',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Car',
        'new_item'           => 'New Car',
        'edit_item'          => 'Edit Car',
        'view_item'          => 'View Car',
        'all_items'          => 'All Cars',
        'search_items'       => 'Search Cars',
        'parent_item_colon'  => 'Parent Cars:',
        'not_found'          => 'No cars found.',
        'not_found_in_trash' => 'No cars found in Trash.',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'car' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_icon'          => 'dashicons-admin-network',
    );

    register_post_type( 'car', $args );
}
add_action( 'init', 'register_car_post_type' );
