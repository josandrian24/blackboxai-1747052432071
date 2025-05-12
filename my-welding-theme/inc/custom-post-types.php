<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function my_welding_theme_register_post_types() {
    $labels = array(
        'name'                  => _x( 'Portfolios', 'Post Type General Name', 'my-welding-theme' ),
        'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'my-welding-theme' ),
        'menu_name'             => __( 'Portfolio', 'my-welding-theme' ),
        'name_admin_bar'        => __( 'Portfolio', 'my-welding-theme' ),
        'archives'              => __( 'Portfolio Archives', 'my-welding-theme' ),
        'attributes'            => __( 'Portfolio Attributes', 'my-welding-theme' ),
        'parent_item_colon'     => __( 'Parent Portfolio:', 'my-welding-theme' ),
        'all_items'             => __( 'All Portfolios', 'my-welding-theme' ),
        'add_new_item'          => __( 'Add New Portfolio', 'my-welding-theme' ),
        'add_new'               => __( 'Add New', 'my-welding-theme' ),
        'new_item'              => __( 'New Portfolio', 'my-welding-theme' ),
        'edit_item'             => __( 'Edit Portfolio', 'my-welding-theme' ),
        'update_item'           => __( 'Update Portfolio', 'my-welding-theme' ),
        'view_item'             => __( 'View Portfolio', 'my-welding-theme' ),
        'view_items'            => __( 'View Portfolios', 'my-welding-theme' ),
        'search_items'          => __( 'Search Portfolio', 'my-welding-theme' ),
        'not_found'             => __( 'Not found', 'my-welding-theme' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'my-welding-theme' ),
        'featured_image'        => __( 'Featured Image', 'my-welding-theme' ),
        'set_featured_image'    => __( 'Set featured image', 'my-welding-theme' ),
        'remove_featured_image' => __( 'Remove featured image', 'my-welding-theme' ),
        'use_featured_image'    => __( 'Use as featured image', 'my-welding-theme' ),
        'insert_into_item'      => __( 'Insert into portfolio', 'my-welding-theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this portfolio', 'my-welding-theme' ),
        'items_list'            => __( 'Portfolios list', 'my-welding-theme' ),
        'items_list_navigation' => __( 'Portfolios list navigation', 'my-welding-theme' ),
        'filter_items_list'     => __( 'Filter portfolios list', 'my-welding-theme' ),
    );
    $args = array(
        'label'                 => __( 'Portfolio', 'my-welding-theme' ),
        'description'           => __( 'Portfolio custom post type', 'my-welding-theme' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-hammer',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true, // Enable Gutenberg editor support
    );
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'my_welding_theme_register_post_types', 0 );
