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
    <div class="small-12 large-6 columns text-right" role="navigation">
       <ul class="inline-list"> 
        <li>Follow us:</li>
        <li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li> 
        <li><a href="http://tembusu.nus.edu.sg/">Tembusu College</a></li> 
        <li><a href="http://instagram.com/tembusucollege">Instagram</a></li>
        <li><a href="https://www.youtube.com/user/TembusuCollege">Youtube</a>
      </ul>
    </div>
  </div>
  <div class="row">
	<div id="colophon" class="large-12 columns" role="contentinfo">
    &copy; Tembusu College &amp; Our Authors
	</div><!-- #colophon -->
  </div><!--row-->
</footer><!--footer-container-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
