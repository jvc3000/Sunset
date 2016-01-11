<?php
/*
@package sunsettheme

	================================
	SUNSET ENQUEUE FUNCTIONS
	================================
*/

// Enqueue Admin Functions
function sunset_load_admin_scripts($hook){
	//echo $hook;

	//register css admin section
	wp_register_style( 'raleway_admin', 'https://fonts.googleapis.com/css?family=Raleway:200,300,500' );
	wp_register_style( 'sunset_admin', get_template_directory_uri() . '/css/sunset.admin.css', array(), '1.0.0', 'all' );

	//register js admin section
	wp_register_script( 'sunset-admin-script', get_template_directory_uri() . '/js/sunset.admin.js', array('jquery'), '1.0.0', true );

	$pages_array = array(
		'toplevel_page_alecaddd_sunset',
		'sunset_page_alecaddd_sunset_options',
		'sunset_page_alecaddd_sunset_contact',
		'sunset_page_alecaddd_sunset_css'
	);

	if(in_array($hook, $pages_array)){
		wp_enqueue_style( 'raleway_admin' );
		wp_enqueue_style( 'sunset_admin' );
		if('toplevel_page_alecaddd_sunset' == $hook){
			wp_enqueue_media();
			wp_enqueue_script( 'sunset-admin-script' );
		}
		if('sunset_page_alecaddd_sunset_css' == $hook){
			wp_enqueue_style( 'sunset-ace-script', get_template_directory_uri() . '/css/sunset.ace.css', array(), '1.0.0', 'all' );
			wp_enqueue_script( 'sunset-ace-script', get_template_directory_uri() . '/js/ace/ace.js', array('jquery'), '1.2.1', true );
			wp_enqueue_script( 'sunset-css-script', get_template_directory_uri() . '/js/sunset.custom_css.js', array('jquery'), '1.0.0', true );
		}
	} else {return;}
}
add_action('admin_enqueue_scripts', 'sunset_load_admin_scripts');

// Enqueue Front-End Functions
function sunset_load_scripts(){
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
	wp_enqueue_style( 'sunset', get_template_directory_uri() . '/css/sunset.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway:200,300,500' );

	wp_deregister_script('jquery');
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.12.0.min.js', array(), '1.12.0', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
}
add_action('wp_enqueue_scripts', 'sunset_load_scripts');