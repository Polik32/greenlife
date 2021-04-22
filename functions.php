<?php
function catalog(){
	register_post_type('cards', array(
		'labels'             => array(
			'name'               => 'Product Catalog',
			'singular_name'      => 'Product Catalog',
			'add_new'            => 'Add new catalog',
			'add_new_item'       => 'Add new catalog',
			'edit_item'          => 'Edit catalog',
			'new_item'           => 'New catalog',
			'view_item'          => 'View catalog',
			'search_items'       => 'Find catalog',
			'not_found'          =>  'No catalogs found',
			'not_found_in_trash' => 'No catalogs found in the basket',
			'parent_item_colon'  => '',
			'menu_name'          => 'Products'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail')
	) );
}

function reviews(){
	register_post_type('review', array(
		'labels'             => array(
			'name'               => 'Reviews',
			'singular_name'      => 'Reviews',
			'add_new'            => 'Add new review',
			'add_new_item'       => 'Add new review',
			'edit_item'          => 'Edit review',
			'new_item'           => 'New review',
			'view_item'          => 'View Review',
			'search_items'       => 'Find a review',
			'not_found'          =>  'No reviews found',
			'not_found_in_trash' => 'No reviews found in the basket',
			'parent_item_colon'  => '',
			'menu_name'          => 'Reviews'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail')
	) );
}

function menu (){
	register_post_type('menu', array(
		'labels'             => array(
			'name'               => 'Menu',
			'singular_name'      => 'Menu',
			'add_new'            => 'Add menu item',
			'add_new_item'       => 'Add menu item',
			'edit_item'          => 'Edit menu item',
			'new_item'           => 'New menu item',
			'view_item'          => 'View menu item',
			'search_items'       => 'Find menu item',
			'not_found'          =>  'No menu items found',
			'not_found_in_trash' => 'No menu items found in the basket',
			'parent_item_colon'  => '',
			'menu_name'          => 'Menu'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title')
	) );
}

function contacts (){
	register_post_type('contacts', array(
		'labels'             => array(
			'name'               => 'Contacts',
			'singular_name'      => 'Contacts',
			'add_new'            => 'Add contact',
			'add_new_item'       => 'Add contact',
			'edit_item'          => 'Edit contact',
			'new_item'           => 'New contacts',
			'view_item'          => 'View contact',
			'search_items'       => 'Find contact',
			'not_found'          =>  'No contacts found',
			'not_found_in_trash' => 'No contacts found in the basket',
			'parent_item_colon'  => '',
			'menu_name'          => 'Contacts'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title')
	) );
}

function questions (){
	register_post_type('questions', array(
		'labels'             => array(
			'name'               => 'Questions',
			'singular_name'      => 'Questions',
			'add_new'            => 'Add a question',
			'add_new_item'       => 'Add a question',
			'edit_item'          => 'Edit question',
			'new_item'           => 'New question',
			'view_item'          => 'View question',
			'search_items'       => 'Find a question',
			'not_found'          =>  'No questions found',
			'not_found_in_trash' => 'No questions found in the basket',
			'parent_item_colon'  => '',
			'menu_name'          => 'Questions'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title')
	) );
}


function Greenway() {
	
	wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/assets/css/animate.css' );
	
	wp_enqueue_style( 'style-main', get_template_directory_uri() . '/style.css' );
		
	wp_enqueue_script( 'buttonUp', get_template_directory_uri() . '/assets/js/buttonUp.js', array(), '20151215', true );
	
	wp_enqueue_script( 'hamburger', get_template_directory_uri() . '/assets/js/hamburger.js', array(), '20151215', true );
	
	wp_enqueue_script( 'pop', get_template_directory_uri() . '/assets/js/pop.js', array(), '20151215', true );
	
	wp_enqueue_script( 'scroll', get_template_directory_uri() . '/assets/js/scroll.js', array(), '20151215', true );
		
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider-reviews.js', array(), '20151215', true );
	
	wp_enqueue_script( 'slider-two', get_template_directory_uri() . '/assets/js/slider-catalog.js', array(), '20151215', true );
	
	wp_enqueue_script( 'form', get_template_directory_uri() . '/contact.js', array(), '20151215', true );
	
	wp_enqueue_script( 'bussines', get_template_directory_uri() . '/contact_business.js', array(), '20151215', true );
	
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '20151215', true );
	
	wp_enqueue_script( 'preloader', get_template_directory_uri() . '/assets/js/preloader.js', array(), '20151215', true );
	
	wp_enqueue_script( 'acardion', get_template_directory_uri() . '/assets/js/accordion.js', array(), '20151215', true );
	
	wp_enqueue_script( 'modal', get_template_directory_uri() . '/assets/js/modal.js', array(), '20151215', true );
	
}

function my_jquery() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}

add_action('wp_enqueue_scripts', 'Greenway', 'init', 'my_jquery', 'reviews', 'catalog', 'menu', 'contacts', 'questions');

add_action('init','catalog');

add_action('init', 'reviews');

add_action('init', 'menu');

add_action('init', 'contacts');

add_action('init', 'questions');

show_admin_bar(false);

add_theme_support( 'post-thumbnails');
		
add_theme_support( 'post-thumbnails', array( 'catalog' ) );

add_theme_support ('menus');


//*******************************************************************************************
// Отключение rss-ленты
function fb_disable_feed() {
wp_redirect(get_option('siteurl'));
}

add_action('do_feed', 'fb_disable_feed', 1);
add_action('do_feed_rdf', 'fb_disable_feed', 1);
add_action('do_feed_rss', 'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

// Отключение RSD-ссылки
remove_action( 'wp_head', 'rsd_link' );
// Отключение wlwmanifest-ссылки
remove_action( 'wp_head', 'wlwmanifest_link' );
//Отключить короткие ссылки в WordPress
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

//удаление версии WordPress start 
function remove_wpversion() {
     return '';
}
add_filter('the_generator', 'remove_wpversion');

/**
 * tgm plugin activation.
 */
require get_template_directory() . '/tgm/reximost.php';