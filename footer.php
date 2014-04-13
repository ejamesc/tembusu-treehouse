<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package treehouse
 */
?>

	</div><!-- #content -->

<footer id="footer-container"> 
  <div class="row">
    <div class="small-12 large-4 columns" role="navigation">
      <h3 class="footer-heading">Navigation</h3>
      <?php wp_nav_menu( array( 'theme_location' => 'footer', 
                                'container' => false,
                                'menu_class' => 'footer-nav-list' ) ); ?>
 
    </div>
    <div class="small-12 large-4 columns">
      <h3 class="footer-heading">Categories</h3>
      <ul><?php wp_list_categories( array('title_li' => null ) ); ?></ul>
    </div>
    <div class="small-12 large-4 columns">
        <h3 class="footer-heading">Follow us</h3>
       <ul> 
        <li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li> 
        <li><a href="http://tembusu.nus.edu.sg/">Tembusu College</a></li> 
        <li><a href="http://instagram.com/tembusucollege">Instagram</a></li>
        <li><a href="https://www.youtube.com/user/TembusuCollege">Youtube</a>
      </ul>
    </div>
  </div>
  <div class="row">
	<div id="colophon" class="small-12 large-8 columns" role="contentinfo">
    &copy; Treehouse. All rights reserved.<br/>
	</div><!-- #colophon -->
  </div><!--row-->
</footer><!--footer-container-->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
  $(document).foundation();
<?php if( is_home() ) { 
  echo "$(window).load(function(){ 
    $('#slider').css('height', '320px').fadeIn(); });"; 
} ?>
</script>
</body>
</html>
