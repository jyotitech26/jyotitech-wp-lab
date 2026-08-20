<?php
/**
 * The footer for JyotiTech theme.
 *
 * @package JyotiTech
 */
?>

</main>

<footer class="site-footer">

    <div class="container">

        <p>
            &copy; <?php echo esc_html( wp_date( 'Y' ) ); ?>
            <?php bloginfo( 'name' ); ?>.
            All rights reserved.
        </p>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>