<?php

if (is_admin()) include_once("includes/theme-config.php");

include_once("includes/theme-enqueue.php");

function show_posts_nav() {
   global $wp_query;
   return ($wp_query->max_num_pages > 1);
}

################################################################################
// Add theme sidebars
################################################################################

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
	  	'name' => __( 'Primary Widget Area' ),
		'id' => 'primary-widget-area',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>',
	));
}

################################################################################
// Add theme support
################################################################################

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'nav-menus' );
if ( function_exists('register_sidebar') ) {

	register_sidebar(array(
	  	'name' => __('Widget Area', 'elliotnolten'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '<div class="clear"></div></li>',
        'before_title' => '<h2 class="section widgettitle">',
        'after_title' => '</h2>',
	));
	register_sidebar(array(
	  	'name' => __(' Footer Widget Area', 'elliotnolten'),
	  	'id' => 'footer-widget-area',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '<div class="clear"></div></li>',
        'before_title' => '<h4 style="color:#5499D0;">',
        'after_title' => '</h4>',
	));
}

################################################################################
// Add Image sizes
################################################################################

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 300, 120, true ); // Normal post thumbnails
	add_image_size( 'featured-work', 510, 510, true ); // featured work size
	add_image_size( 'latest-post', 600, 9999, false ); // latest-post size
	add_image_size( 'large', 510, 9999, false ); // Permalink thumbnail size
	
	add_custom_background();



################################################################################
// Add 'project' post type
################################################################################

add_action('init', 'create_project_postype');

function create_project_postype(){ 
	$labels = array(
		'name' => _x('Projects', 'post type general name'),
		'singular_name' => _x('Project Item', 'post type singular name'),
		'add_new' => _x('Add New', 'Project item'),
		'add_new_item' => __('Add New Project Item'),
		'edit_item' => __('Edit Project Item'),
		'new_item' => __('New Project Item'),
		'view_item' => __('View Project Item'),
		'search_items' => __('Search Project'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		/*'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',*/
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'trackbacks',
		'custom-fields',
		'comments',
		'revisions',
		'thumbnail',
		'author',)
		); 
 
	register_post_type( 'project' , $args );
	flush_rewrite_rules();
	}
	
	//build taxonomies for Project	
	add_action( 'init', 'specialty_taxonomy', 0 );
	
	function specialty_taxonomy() {
		$labels = array(
			'name'                          => 'Specialties',
			'singular_name'                 => 'Specialty',
			'search_items'                  => 'Search Specialties',
			'popular_items'                 => 'Popular Specialties',
			'all_items'                     => 'All Specialties',
			'parent_item'                   => 'Parent Specialty',
			'edit_item'                     => 'Edit Specialty',
			'update_item'                   => 'Update Specialty',
			'add_new_item'                  => 'Add New Specialty',
			'new_item_name'                 => 'New Specialty',
			'separate_items_with_commas'    => 'Separate Specialties with commas',
			'add_or_remove_items'           => 'Add or remove Specialties',
			'choose_from_most_used'         => 'Choose from most used Specialties'
			);
		
		$args = array(
			'label'                         => 'Specialties',
			'labels'                        => $labels,
			'public'                        => true,
			'hierarchical'                  => true,
			'show_ui'                       => true,
			'show_in_nav_menus'             => true,
			'args'                          => array( 'orderby' => 'term_order' ),
			'rewrite'                       => array( 'slug' => 'work/specialties', 'with_front' => false ),
			'query_var'                     => true
		);
		
		register_taxonomy(
			'specialties',
			'project',
			$args
		);
	}
		register_taxonomy(
			'skills',
			'project',
			array(
				'hierarchical' => false,
				'label' => 'Skills',
				'singular_label' => 'Skill',
				'query_var' => true,
				'rewrite' => array( 'slug' => 'work/skills', 'with_front' => false ),
			)
		);
	
	
	
	//call custom post type template
	add_action("template_redirect", 'project_template_redirect');
	
	// Template selection
	function project_template_redirect()
	{
		global $wp;
		global $wp_query;
		if ($wp->query_vars["post_type"] == "project")
		{
			// Let's look for the property.php template file in the current theme
			if (have_posts())
			{
				include(TEMPLATEPATH . '/single-project.php');
				die();
			}
			else
			{
				$wp_query->is_404 = true;
			}
		}
	}

################################################################################
// Actions + Filters
################################################################################

// Remove links to the extra feeds (e.g. category feeds)
remove_action( 'wp_head', 'feed_links_extra', 3 );
// Remove links to the general feeds (e.g. posts and comments)
remove_action( 'wp_head', 'feed_links', 2 );
// Remove link to the RSD service endpoint, EditURI link
remove_action( 'wp_head', 'rsd_link' );
// Remove link to the Windows Live Writer manifest file
remove_action( 'wp_head', 'wlwmanifest_link' );
// Remove index link
remove_action( 'wp_head', 'index_rel_link' );
// Remove prev link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
// Remove start link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
// Display relational links for adjacent posts
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
// Remove XHTML generator showing WP version
remove_action( 'wp_head', 'wp_generator' );

function custom_excerpt($text) {
	return str_replace('[...]', ' <a href="'. get_permalink($post->ID) . '" class="more">' . 'More&nbsp;&raquo;' . '</a>', $text);
}
add_filter('the_excerpt', 'custom_excerpt');

// Allow HTML in descriptions
$filters = array('pre_term_description', 'pre_link_description', 'pre_link_notes', 'pre_user_description');
foreach ( $filters as $filter ) {
	remove_filter($filter, 'wp_filter_kses');
}

