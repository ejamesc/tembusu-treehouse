<?php
/**
 * The Template for displaying all single posts.
 *
 * @package treehouse
 */

get_header(); ?>

	<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <div class="row">
		  <?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>
      <?php get_sidebar(); ?>

    </div><!--row-->

    <div class="row">
      <?php treehouse_post_nav(); ?>
    </div>
    

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
