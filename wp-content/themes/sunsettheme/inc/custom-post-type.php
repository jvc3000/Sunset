<?php
/*
@package sunsettheme

	================================
	SUNSET THEME CUSTOM POST TYPES
	================================
*/

$contact = get_option('contact_form');
if(@$contact == 1){
	add_action('init', 'sunset_contact_custom_post_type');
	add_filter('manage_sunset-contact_posts_columns', 'sunset_set_contact_columns');
	add_action('manage_sunset-contact_posts_custom_column', 'sunset_contact_custom_column', 10, 2);
}

/* Contact Custom Post Type */
function sunset_contact_custom_post_type(){
	$labels = array(
		'name'              => 'Messages',
		'singular_name'     => 'Message',
		'menu_name'         => 'Messages',
		'name_admin_bar'    => 'Message'
	);
	$args = array(
		'labels'            => $labels,
		'show_ui'           => true,
		'show_in_menu'      => true,
		'capability_type'   => 'post',
		'hierarchical'      => false,
		'menu_position'     => 26,
		'menu_icon'         => 'dashicons-email-alt',
		'supports'          => array('title', 'editor', 'author')
	);
	register_post_type('sunset-contact', $args);
}

function sunset_set_contact_columns(){
	$newColumns = array();
	$newColumns['title'] = 'Full Name';
	$newColumns['message'] = 'Message';
	$newColumns['email'] = 'Email';
	$newColumns['date'] = 'Date';
	return $newColumns;
}

function sunset_contact_custom_column($column){
	switch($column){
		case 'message':
			echo get_the_excerpt();
			break;
		case 'email':
			// email column
			echo 'email@email.com';
			break;
	}
}