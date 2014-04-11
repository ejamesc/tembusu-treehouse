<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package treehouse
 */
?>
<header class="small-12 column">
    <?php $image = get_field('page_header_image');
    if( !empty($image) ): ?>
      <section class="page-lede-image"> 
	        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </section>
    <?php endif; ?>      
</header><!-- .single-header -->

<div class="small-12 large-8 large-offset-1 column page-content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'treehouse' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'treehouse' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
</div>
