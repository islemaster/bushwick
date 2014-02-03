<?php
/**
 * The template for displaying the footer.
 *
 * @package Bushwick
 */
?>
	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="widget-container">
            <?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>

                <aside id="search" class="widget widget_search">
                    <?php get_search_form(); ?>
                </aside>

                <aside id="archives" class="widget">
                    <h1 class="widget-title"><?php _e( 'Archives', 'bushwick' ); ?></h1>
                    <ul>
                        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                    </ul>
                </aside>

                <aside id="meta" class="widget">
                    <h1 class="widget-title"><?php _e( 'Meta', 'bushwick' ); ?></h1>
                    <ul>
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <?php wp_meta(); ?>
                    </ul>
                </aside>

            <?php endif; // end sidebar widget area ?>
        </div>
		<div class="site-info">
			<?php do_action( 'bushwick_credits' ); ?>
			<p>
				<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'bushwick' ); ?>" rel="generator"><?php printf( __( 'Powered by %s.', 'bushwick' ), 'WordPress' ); ?></a>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'bushwick' ), 'Bushwick', '<a href="http://molovo.co.uk" rel="designer">James Dinsdale</a>' ); ?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php wp_footer(); ?>

</body>
</html>
