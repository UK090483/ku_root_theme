<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jmh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'jmh'); ?></a> -->




		<header id="masthead" class="site-header">

			<?php get_template_part('template-parts/menu'); ?>
		</header><!-- #masthead -->

		<?php
		$kubase_menu_space = get_post_meta($post->ID, 'kubase_menu_space', true);
		$kubase_menu_space_class = $kubase_menu_space ? 'no' == $kubase_menu_space ? 'site-content-no-menu-space' : '' : '';

		?>

		<div id="content" class="site-content <?php echo $kubase_menu_space_class ?>">
			<div id="main" class="site-main container">