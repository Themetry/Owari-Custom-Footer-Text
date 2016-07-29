<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Owari Custom Footer Text
 */

?>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">Copyright &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>.</div><!-- .site-info -->
			</footer><!-- #colophon -->

		</div><!-- .main-wrap -->
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
