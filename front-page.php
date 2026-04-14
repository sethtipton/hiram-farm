<?php
/**
 * Front page template.
 *
 * @package Hiram_Farm
 */

get_header();
?>

	<main id="primary" class="site-main front-page-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'front-page' );

		endwhile;
		?>

	</main><!-- #main -->

<?php
get_footer();
