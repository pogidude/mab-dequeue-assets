<?php

/*
Plugin Name: MAB Dequeue CSS/JS
Plugin URI: http://magicactionbox.com
Description: Prevent CSS and JS files from being loaded by dequeueing the file through wp_dequeue_script and wp_dequeue_css
Version: 1.0
Author: pogidude
Author URI: http://pogidude.com
License: A "Slug" license name e.g. GPL2
*/

add_action('wp_enqueue_scripts', 'mabdequeue_assets', 101);
function mabdequeue_assets(){
	// magic action box
	wp_dequeue_script('mab-ajax-form');

	// magic action popup
	wp_dequeue_script('map-button-popup');
}