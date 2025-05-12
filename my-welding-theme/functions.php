<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function my_welding_theme_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'my-welding-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Enqueue Google Fonts
    wp_enqueue_style( 'my-welding-theme-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', false );

    // Enqueue Font Awesome
    wp_enqueue_style( 'my-welding-theme-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', false );

    // Enqueue Tailwind CSS via CDN
    wp_enqueue_script( 'my-welding-theme-tailwind', 'https://cdn.tailwindcss.com', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_welding_theme_enqueue_scripts' );

function my_welding_theme_setup() {
    // Add support for dynamic title tag
    add_theme_support( 'title-tag' );

    // Add support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register navigation menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my-welding-theme' ),
    ) );

    // Add support for HTML5 markup
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'my_welding_theme_setup' );

// Include custom post type and shortcode files
require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/inc/shortcodes.php';
