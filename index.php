<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package treehouse
 */

get_header(); ?>

<div class="row">
    <?php // Begin orbit slider ?>
    <?php query_posts( array ( 'category_name' => 'headline') ); // populate from headline category ?>
		<?php if ( have_posts() ) : ?>
      <div class="small-12 large-12 columns">
        <ul class="orbit" data-orbit>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php $image = get_field('cropped_header_image');
            if( !empty($image) ): ?>
              <li><a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                <div class="orbit-caption">
                  <a class="slider-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
              </li>
            <?php endif; // End of has post thumbnail ?>
          <?php endwhile; // end of loop ?>
          </ul>
      </div>
    <?php endif; wp_reset_query(); // End of if have_posts ?>
    <?php if ( have_posts() ) : ?>
      <div class="small-12 large-10 columns">
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2"> 
			  <?php /* Start the Loop */ ?>
			  <?php while ( have_posts() ) : the_post(); ?>

			  	<?php
			  		/* Include the Post-Format-specific template for the content.
			  		 * If you want to override this in a child theme, then include a file
			  		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			  		 */
			  		get_template_part( 'content', get_post_format() );
			  	?>

        <?php endwhile; ?>
        </ul>
      </div> <!--small-12 large-10-->
    

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

  <?php get_sidebar(); ?>
	<?php treehouse_paging_nav(); ?>
</div> <!--row-->
<?php get_footer(); ?>
