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

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

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

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'jyotitech' ),
        )
    );
}
add_action( 'after_setup_theme', 'jyotitech_setup' );

/**
 * Enqueue theme stylesheet.
 */
function jyotitech_enqueue_styles() {

    wp_enqueue_style(
        'jyotitech-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'jyotitech_enqueue_styles' );

/**
 * Enqueue theme JavaScript.
 */
function jyotitech_enqueue_scripts() {

    wp_enqueue_script(
        'jyotitech-script',
        get_template_directory_uri() . '/assets.js',
        array(),
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'jyotitech_enqueue_scripts' );