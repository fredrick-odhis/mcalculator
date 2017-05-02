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

function widget_display($atts){

	$temp .= "
    <div id='wid2'>
    	<div>
    		<b style='margin-left: -20px;'>Property Price:</b>
    		<input id='user_input' type='text'>
    	</div><br />
    	<!-- Down payment slider !-->
    	<div id='slider'>
    		<b id='back'>Down Payment: </b>
    		<label id='varry'></label>
      		<div id='custom-handle' class='ui-slider-handle'></div>
    	</div><br />
    	<!-- interest slider !-->

      <div>
    		<div id='interest'>
    			<b id='back'>Interest: </b>
    			<label id='int_label'></label>
      			<div id='custom-handle' class='ui-slider-handle'></div>
    		</div>
    	</div><br />

      <!-- Years slider !-->
    	<div>
    		<div id='years'>
    			<b id='back'>Years: </b>
    			<label id='yrs_label'></label>
      			<div id='custom-handle' class='ui-slider-handle'></div>
    		</div>
    	</div><br />
    	<!-- Amount Monthly !-->
    	<div>
    		<b style='margin-left: -20px;'>Amount Monthly:</b>
    		<label id='amount_monthly'>Monthly Amount Test</label>
    	</div>

    	<div>
    		<input id='button' type='submit' value='Calculate'>
    	</div>

    </div>
	";

	echo $temp;

}

add_shortcode("mortgage_cal","widget_display");
add_filter('widget_text','do_shortcode');