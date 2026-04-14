<?php
/**
 * Hiram Farm functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hiram_Farm
 */

if ( ! defined( 'HIRAM_FARM_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'HIRAM_FARM_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hiram_farm_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
	load_theme_textdomain( 'hiram-farm', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'hiram-farm' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'hiram_farm_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hiram_farm_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hiram_farm_content_width', 640 );
}
add_action( 'after_setup_theme', 'hiram_farm_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function hiram_farm_scripts() {
	wp_enqueue_style( 'hiram-farm-style', get_stylesheet_uri(), array(), HIRAM_FARM_VERSION );
	wp_style_add_data( 'hiram-farm-style', 'rtl', 'replace' );

	wp_enqueue_script( 'hiram-farm-navigation', get_template_directory_uri() . '/js/navigation.js', array(), HIRAM_FARM_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'hiram_farm_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
