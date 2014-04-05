<?php
/**
 * @package treehouse
 */
?>
<header class="single-header small-12 column">
		<h1 class="single-title"><?php the_title(); ?></h1>
   <?php if( has_post_thumbnail() ) : ?>
      <section class="single-lede-image"> 
        <?php the_post_thumbnail() ?>
      </section>
    <?php endif ?>

</header><!-- .single-header -->

<div class="small-12 large-2 column">
  <div class="entry-meta">
      <?php treehouse_posted_on(); ?>
      <?php echo do_shortcode('[ssba]'); ?>
  </div><!-- .entry-meta -->    
</div>

<div class="small-12 medium-9 large-7 column">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'treehouse' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			/* translators: used between list items, there is a space after the comma */
			// $category_list = get_the_category_list( __( ', ', 'treehouse' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'treehouse' ) );

			$meta_text = __( 'Tags: %1$s', 'treehouse' );

			printf(
				$meta_text,
				$tag_list
			);
		?>

		<?php edit_post_link( __( '(Edit)', 'treehouse' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div>
