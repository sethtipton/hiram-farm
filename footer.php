<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hiram_Farm
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php bloginfo( 'name' ); ?>
			<span class="sep">|</span>
			<?php echo esc_html( wp_date( 'Y' ) ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
