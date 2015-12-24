<?php
/*
@package sunsettheme

	================================
	ADMIN PAGE
	================================
*/

function sunset_add_admin_page()
{
	//  Set Custom Icon URI var
	$icon_link = get_template_directory_uri() . '/img/sunset-icon.png';

	//  Generate Sunset Admin Page
	//  add_menu_page() reference: https://codex.wordpress.org/Function_Reference/add_menu_page
	add_menu_page( 'Sunset Theme Options', 'Sunset', 'manage_options', 'alecaddd_sunset', 'sunset_theme_create_page', $icon_link, 110 );

	//  Generate Sunset Admin Sub Pages
	add_submenu_page( 'alecaddd_sunset','Sunset Theme Options', 'General', 'manage_options', 'alecaddd_sunset', 'sunset_theme_create_page' );
	add_submenu_page( 'alecaddd_sunset','Sunset CSS Options', 'Custom CSS', 'manage_options', 'alecaddd_sunset_css', 'sunset_theme_settings_page' );
}

add_action('admin_menu', 'sunset_add_admin_page');

function sunset_theme_create_page()
{
	/** @noinspection PhpIncludeInspection */
	require_once( get_template_directory() . '/inc/templates/sunset-admin.php' );
}

function sunset_theme_settings_page()
{
	echo '<h1>Sunset Custom CSS</h1>';
}