<?php
/**
 * Main template file.
 *
 * @package JyotiTech
 */

get_header();
?>

<div class="container">

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h1 class="entry-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h1>

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>

            </article>

        <?php endwhile; ?>

    <?php else : ?>

        <p>
            <?php esc_html_e( 'No content found.', 'jyotitech' ); ?>
        </p>

    <?php endif; ?>

</div>

<?php
get_footer();