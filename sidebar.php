<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package treehouse
 */
?>
<div id="secondary" class="<?php if(is_home() or is_page()) { echo "top-offset";} ?> small-12 large-2 columns" role="complementary">
      <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', '_s' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>


		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
