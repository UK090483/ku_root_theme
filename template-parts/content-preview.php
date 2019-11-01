<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmh
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href=<?php echo esc_url( get_permalink() ) ?>>
		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title is-style-jmh-text-color">', '</h2>' );?>
		</header><!-- .entry-header -->


		<div class="entry-content">
		

		<?php the_post_thumbnail('thumbnail'); ?>

		<div class="entry-exerpt<?php if (!has_post_thumbnail()) {echo ' no-padding';} ?>">
		<?php the_excerpt();?>	
		</div>	

	

		</div><!-- .entry-content -->

	

	<footer class="entry-footer">

				<?php
				the_date( '', '<p>', '</p>', true);
				?>
		
	</footer><!-- .entry-footer -->

	</a>
</article><!-- #post -->
