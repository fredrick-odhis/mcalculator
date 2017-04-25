<?php
/*
Plugin Name: Mortgage Calculator
Plugin URI: http://github.com/tunapanda
Description: Testing out jquery
Version: 0.1
Author URI: http://tunapanda.org
*/


if (!is_admin()) {
	wp_enqueue_script("jquery-ui-core", array('jquery'));
	wp_enqueue_script("jquery-ui-slider", array('jquery', 'jquery-ui-core'));
	wp_register_script('myjava', plugins_url('myjava.js', __FILE__), array('jquery'));
	wp_enqueue_script('myjava', plugins_url('myjava.js', __FILE__), array('jquery-ui-core'));
}

function addUIstyles() {
	wp_enqueue_style('mystyle',plugins_url('jquery-ui.css', __FILE__), false, false);
	wp_register_style('mystyled',plugins_url('styled.css', __FILE__));
	wp_enqueue_style('mystyled');
}

add_action('init', 'addUIstyles');