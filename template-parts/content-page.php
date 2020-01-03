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

	<h1>page bla from linux</h1>
	<?php jmh_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->