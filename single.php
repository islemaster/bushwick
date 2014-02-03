<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Bushwick
 */

?>

    <div id="upper-primary" class="content-area">
        <main id="upper-main" class="site-main">
            <?php get_template_part( 'navigation' ); ?>
        </main>
    </div>
    <?php
        get_header();
    ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'content', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
