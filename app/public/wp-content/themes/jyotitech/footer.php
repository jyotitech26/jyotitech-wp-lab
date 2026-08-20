<?php
/**
 * Footer template
 *
 * @package JyotiTech
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<footer class="site-footer">

    <div class="container">

        <p>
            &copy;
            <?php echo esc_html( wp_date( 'Y' ) ); ?>
            <?php bloginfo( 'name' ); ?>.
            All rights reserved.
        </p>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>