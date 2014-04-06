<?php
/**
 * @package treehouse
 */
?>
<li> <!--needed for foundation's block grid-->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ' / ', 'treehouse' ) );
				if ( $categories_list && treehouse_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( '%1$s', 'treehouse' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>
		<?php endif; // End if 'post' == get_post_type() ?>

    <?php if( has_post_thumbnail() ) : ?>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
    <?php endif; // End of has post thumbnail ?>
<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		
			</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

  <footer class="entry-footer">
  <a href="<?php the_permalink(); ?>">Read more &rarr;</a>
		
		<?php // edit_post_link( __( 'Edit', 'treehouse' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</li> <!--needed for foundation's block grid-->
