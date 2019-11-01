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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jmh' ); ?></a> -->


	<?php 
	$logo_stadt = esc_attr(get_theme_mod('jmh_logo_stadt','Deine Stadt'));
	$logo_subtext = esc_attr(get_theme_mod('jmh_logo_subtext','muss handeln'));
	$menu_width = esc_attr(get_theme_mod('jmh_menu_width','50'));
	?>

	<header id="masthead" class="site-header">
		
		<nav id="site-navigation" class="main-navigation">

		<div class='container nav-container'>

		    <div class="nav--upper">
				<div class="nav--logo ">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <h1><?php echo $logo_stadt; ?></h1>
                        <h1><?php echo $logo_subtext; ?></h1>
                    </a>
                </div>
			
				<div class="nav--links" style="width:<?php echo $menu_width;?>%">	
						<?php
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'menu_id'        => 'primary-menu',
							'container'      => ''
						));
						?>
				</div>
			

				<div class="nav--mobile-btn">
                    <div class="nav--mobile-btn-custom">
                        <div class="nav--mobile-btn-line"></div>
                        <div class="nav--mobile-btn-line"></div>
                        <div class="nav--mobile-btn-line"></div>
                    </div>
				</div>
			</div>	
				<div class="nav--mobile">	
						<?php
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'menu_id'        => 'primary-menu',
							'container'      => ''
						));
						?>
				</div>
		</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
	<div class="jmh-scrollbar-wrap">
		<div class="jmh-scrollbar">
			<div class="jmh-scrollbar--dot"></div>
		</div>
	</div>

	<div id="content" class="site-content">
	