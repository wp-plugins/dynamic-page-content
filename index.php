<?php
/**
* Plugin Name: Dynamic Page Content
* Plugin URI: http://www.team2digital.de/dynamic-content
* Description: Dynamic creation of content from URL Paramaters
* Version: 1.0 
* Author: Benjamin Spinola
* Author URI: http://www.team2digital.de/dynamic-content
* License: GPLv2 or later
*/

add_action( 'admin_menu', 'register_dynamiccontent_menu_page' );

// SHORTCODES
include( plugin_dir_path( __FILE__ ) . 'dynamiccontent_shortcode.php');

//------------ STYLES FOR SHORTCODE FRONTEND
add_action( 'wp_enqueue_scripts', 'register_plugin_scripts' );
function register_plugin_scripts() {
	wp_register_style( 'dynamiccontent_style', plugins_url( 'dynamiccontent/css/dynamiccontent_style.css' ) );
	wp_enqueue_style( 'dynamiccontent_style' );
}

//------------ ADMIN PAGES ----------------------------------------------------
//------------ STARTPAGE   
function register_dynamiccontent_menu_page(){
    add_menu_page(
                  'DynamicContent',
                  'DynamicContent',
                  'manage_options',
                  'dynamiccontent/dynamiccontent.php',
                  '',
                  plugins_url( 'dynamiccontent/images/icon.png' ),
                  '65.8' ); 
}