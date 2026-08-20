<?php
/**
 * Header template
 *
 * @package JyotiTech
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

    <div class="container">

        <div class="site-branding">

            <?php if ( has_custom_logo() ) : ?>

                <?php the_custom_logo(); ?>

            <?php else : ?>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <span class="site-title">
                        <?php bloginfo( 'name' ); ?>
                    </span>
                </a>

            <?php endif; ?>

        </div>

        <nav class="site-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'jyotitech' ); ?>">

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'fallback_cb'    => false,
                    'container'      => false,
                )
            );
            ?>

        </nav>

    </div>

</header>