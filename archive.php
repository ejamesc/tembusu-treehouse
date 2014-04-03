<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'treehouse' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'treehouse' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'treehouse' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'treehouse' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'treehouse' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'treehouse' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'treehouse' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'treehouse');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'treehouse');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'treehouse' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'treehouse' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'treehouse' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'treehouse' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'treehouse' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'treehouse' );

						else :
							_e( 'Archives', 'treehouse' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
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
