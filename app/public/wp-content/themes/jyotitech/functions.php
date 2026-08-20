<?php
/**
 * JyotiTech Theme Functions
 *
 * @package JyotiTech
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup.
 */
function jyotitech_setup() {

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable featured images.
    add_theme_support( 'post-thumbnails' );

    // Enable HTML5 markup.
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Enable custom logo.
    add_theme_support( 'custom-logo' );

    // Register navigation menu.
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'jyotitech' ),
        )
    );
}
add_action( 'after_setup_theme', 'jyotitech_setup' );

/**
 * Enqueue theme styles.
 */
function jyotitech_enqueue_styles() {

    wp_enqueue_style(
        'jyotitech-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'jyotitech_enqueue_styles' );