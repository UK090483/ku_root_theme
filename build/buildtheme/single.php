<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jmh
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">
		<?php
		while ( have_posts() ) :
			the_post();

			the_content();

			the_post_navigation(array(
				'prev_text'          => 'vorheriger Beitrag',
				'next_text' => 'nächster Beitrag',
			));

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
