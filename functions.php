<?php

/**
 * jmh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jmh
 */

if (!function_exists('jmh_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jmh_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on jmh, use a find and replace
		 * to change 'jmh' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('jmh', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'main-menu' => esc_html__('Main', 'jmh'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		add_theme_support('editor-styles');
		add_editor_style(get_template_directory_uri() . '/public/css/blockEditor.bundle.css');

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');



		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'jmh_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jmh_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('jmh_content_width', 640);
}
add_action('after_setup_theme', 'jmh_content_width', 0);


// require get_template_directory() . '/customizer/init.php';


/**
 * Enqueue scripts and styles.
 */
function ku_base_scripts()
{
	wp_enqueue_style('ku-base-main', get_template_directory_uri() . '/public/css/main.bundle.css');
	wp_enqueue_style('ku-base-main-style', get_template_directory_uri() . '/style.css');
	// wp_add_inline_style('ku-base-main-style', ku_base_generateCss());
	wp_enqueue_script('ku-base-main-js', get_template_directory_uri() . '/public/js/main.bundle.js', array(), '1.1', true);
	wp_enqueue_script('ku-base-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'ku_base_scripts');


function jmh_block_editor_scripts()
{

	wp_enqueue_script(
		'jmh_block_editor_js',
		get_template_directory_uri() . '/public/js/blockEditor.bundle.js',
		array('wp-blocks')
	);
	// wp_enqueue_style('jmh_block_editor_js_css', get_template_directory_uri() . '/public/css/blockEditor.bundle.css');
}
add_action('enqueue_block_editor_assets', 'jmh_block_editor_scripts');



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/aligneWide.php';

require get_template_directory() . '/inc/footerwidgets.php';



require get_template_directory() . '/inc/NavColor.php';

// function enqueue_files()
// {
// 	$dirJS = new DirectoryIterator(get_stylesheet_directory() . '/public/js/');

// 	foreach ($dirJS as $file) {

// 		if (pathinfo($file, PATHINFO_EXTENSION) === 'ttf' || pathinfo($file, PATHINFO_EXTENSION) === 'woff') {

// 			wp_enqueue_script(basename($file), get_template_directory_uri() . '/public/js/' . basename($file), null, null, true);
// 		}
// 	}
// };
// add_action('wp_enqueue_scripts', 'enqueue_files');


function kulog($item)
{
	error_log(json_encode($item, JSON_PRETTY_PRINT));
};
