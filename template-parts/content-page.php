<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmh
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php jmh_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
	<?php
	wp_link_pages(
		array(
			'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__('Page', 'twentytwenty') . '"><span class="label">' . __('Pages:', 'twentytwenty') . '</span>',
			'after'       => '</nav>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		)
	)
	?>

</article><!-- #post-<?php the_ID(); ?> -->