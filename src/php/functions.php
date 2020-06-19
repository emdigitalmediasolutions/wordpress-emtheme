<?php

// Do not access directly
defined('ABSPATH') || exit;

// Theme defaults
const DEFAULT_PRIMARY_COLOR = '#4c51bf';
const DEFAULT_SECONDARY_COLOR = '#718096';
const DEFAULT_HEADER_PADDING = '6';


// Set theme support
function em_theme_support()
{
    // Custom background color
    add_theme_support(
        'custom-background',
        array(
            'default-color' => 'ffffff',
        )
    );

    // Set content-width
    global $content_width;
    if (!isset($content_width))
    {
        $content_width = 580;
    }

    add_theme_support( 'title-tag' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	$defaults = array(
		'height'      => 512,
		'width'       => 512,
		'flex-height' => false,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'em_theme_support');


// Include all required files
$includes = array(
    '/classes/class-emtheme-customize.php',
);
foreach ($includes as $file)
{
    require_once get_template_directory() . $file;
}


// Include all scripts and stylesheets required by the theme
function themeslug_enqueue_styles()
{
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('style-theme-style', get_stylesheet_uri(), array(), $theme_version, 'all');
	wp_enqueue_style('style-theme-common', get_template_directory_uri() . '/common.css', array(), $theme_version, 'all');
	wp_enqueue_style('style-theme-fontawesome', get_template_directory_uri() . '/assets/webfonts/all.min.css', array(), $theme_version, 'all');
	wp_enqueue_style('style-theme-emtheme', get_template_directory_uri() . '/emtheme.css', array(), $theme_version, 'all');
}

function themeslug_enqueue_scripts()
{
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_script('script-theme-common', get_template_directory_uri() . '/assets/js/common.min.js', array(), $theme_version, false);
    wp_enqueue_script('script-theme-nav-menu', get_template_directory_uri() . '/assets/js/nav-menu.min.js', array(), $theme_version, false);
    wp_enqueue_script('script-theme-utilities', get_template_directory_uri() . '/assets/js/utilities.min.js', array(), $theme_version, false);
}

add_action('wp_enqueue_scripts', 'themeslug_enqueue_styles');
add_action('wp_enqueue_scripts', 'themeslug_enqueue_scripts');


// Setup custom theme configurations

function emtheme_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here
    $wp_customize->add_section( 'mytheme_new_section_name' , array(
        'title'      => 'Visible Section Name',
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'header_textcolor' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );
}
add_action( 'customize_register', 'emtheme_customize_register' );


/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function emtheme_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="text-lg mb-3 font-bold">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => 'Footer #1',
				'id'          => 'sidebar-1',
				'description' => 'Widgets in this area will be displayed in the first column in the footer.',
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => 'Footer #2',
				'id'          => 'sidebar-2',
				'description' => 'Widgets in this area will be displayed in the second column in the footer.',
			)
		)
    );

	// Footer #3.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => 'Footer #3',
				'id'          => 'sidebar-3',
				'description' => 'Widgets in this area will be displayed in the third column in the footer.',
			)
		)
	);

	// Footer #4.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => 'Footer #4',
				'id'          => 'sidebar-4',
				'description' => 'Widgets in this area will be displayed in the fourth column in the footer.',
			)
		)
	);


}

add_action('widgets_init', 'emtheme_sidebar_registration');


// Register primary menus
function emtheme_menus()
{
	$locations = array(
		'primary' => 'Primary Navigation Menu',
	);
	register_nav_menus($locations);
};

add_action('init', 'emtheme_menus');


// Register custom post type for services
function custom_post_services()
{
	$labels = array(
		'name' => 'Services',
		'singular_name' => 'Service',
		'menu_name' => 'Services',
		'name_admin_bar' => 'Service',
		'add_new' => 'Add New',
		'add_new_item' => 'Name',
		'new_item' => 'New Service',
		'edit_item' => 'Edit Service',
		'view_item' => 'View Service',
		'all_items' => 'All Services',
		'featured_image' => 'Featured Image',
		'search_items' => 'Search Service',
		'parent_item_colon' => 'Parent Service: ',
		'not_found' => 'Service not found',
		'not_found_in_trash' => 'Service not found in trash',
	);

	$args = array(
		'labels' => $labels,
		'menu_icon' => 'dashicons-schedule',
		'description' => 'Services',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt'),
        'show_in_rest'       => true
	);

	register_post_type('service', $args);
}
add_action('init', 'custom_post_services');