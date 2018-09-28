<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CastroStreetFair
 */

?>

	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'sponsors' ) ) : ?>
		<section class="sponsors">
			<?php dynamic_sidebar( 'sponsors' ); ?>
		</section>
  <?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<ul class="site-info">
      <li class="cms-info">Proudly powered by <a href="http://wordpress.org/">WordPress</a> and <a href="http://dreamhost.com/">DreamHost</a>
			<li class="theme-info"><a href="http://github.com/hugobaeta/castrostreetfair">Open Sourced Design</a> by <a href="http://hugobaeta.com">Hugo Baeta</a></li>
		</ul><!-- .site-info -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
