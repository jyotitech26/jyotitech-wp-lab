<?php
/**
 * The header for JyotiTech theme.
 *
 * @package JyotiTech
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

    <div class="container header-inner">

        <!-- Site Logo / Branding -->
        <div class="site-branding">

            <?php if ( has_custom_logo() ) : ?>

                <?php the_custom_logo(); ?>

            <?php else : ?>

                <a
                    class="site-title"
                    href="<?php echo esc_url( home_url( '/' ) ); ?>"
                >
                    <?php bloginfo( 'name' ); ?>
                </a>

            <?php endif; ?>

        </div>


        <!-- Mobile Menu Button -->
        <button
            class="menu-toggle"
            type="button"
            aria-controls="primary-menu"
            aria-expanded="false"
        >
            <span></span>
            <span></span>
            <span></span>

            <span class="screen-reader-text">
                <?php esc_html_e( 'Menu', 'jyotitech' ); ?>
            </span>
        </button>


        <!-- Primary Navigation -->
        <nav
            class="site-navigation"
            id="site-navigation"
            aria-label="<?php esc_attr_e( 'Primary Menu', 'jyotitech' ); ?>"
        >

            <?php

            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                )
            );

            ?>

        </nav>

    </div>

</header>


<main id="primary" class="site-main">