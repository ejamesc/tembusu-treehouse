<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package treehouse
 */

get_header(); ?>

<div class="row">
	<section id="primary" class="content-area small-12 large-9 column">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
        <h1 class="page-title">
          <?php printf( __( 'Search Results for: %s', 'treehouse' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <section class="collection-post row">
          <div class="small-12 large-5 column">
            <?php if( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
            <?php endif ?>
          </div>

          <div class="small-12 medium-7 column">
          <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
          </h1>
          <div class="entry-summary">
            <?php the_excerpt(); ?>
            <footer class="entry-footer">
              <a href="<?php the_permalink(); ?>">Read more &rarr;</a>
            </footer>
            </div><!-- .entry-summary -->
          </div> <!--small-12 medium-5-->
      
      </section>

      <?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php treehouse_paging_nav(); ?>
</div> <!--row-->
<?php get_footer(); ?>
