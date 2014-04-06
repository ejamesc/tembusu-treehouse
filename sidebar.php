<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package treehouse
 */
?>
<div id="secondary" class="<?php if(is_home()) { echo "top-offset";} ?> small-12 large-2 columns" role="complementary">
    <aside class="widget">
      <ul class="social-widget">
        <li><a href="http://instagram.com/tembusucollege"><img class="social" src="<?php echo get_template_directory_uri() ?>/img/instagram.png" width=60 />&nbsp;&nbsp;  Instagram</a></li>
        <li><a href="https://www.youtube.com/user/TembusuCollege"><img class="social" src="<?php echo get_template_directory_uri() ?>/img/youtube.png" width=60/>&nbsp;&nbsp;  Youtube</a></li>
      </ul>
    </aside>

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
