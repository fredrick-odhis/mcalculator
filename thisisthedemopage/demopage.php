<?php
/*Template Name: Demo Tabs Page
*/

get_header(); ?>
	
<div id = "wid"> 
	<h1>This is a Mortgage Calculator</h1>
	<div>
		<b style = "margin-left: -20px;">Property price</b>
		<input id = "user_input" type  = "text"/>
	</div></br>
	<div id = "slider">
		<b id = "back">Down payment</b>
		<label id = "varry"></label>
		<div id = "custom-handle" class = "ui-slider-handle"></div>
	</div><br/><br/>
	<div>
		<div id = "interest">
			<b id = "back">Interest</b>
			<label id = "int_label"></label>
			<div id = "custom-handle" class = "ui-slider-handle"></div>
	    </div><br/>
	</div><br/>
	<div>
		<div id = "years">
			<b id = "back">Years</b>
			<label id = "yrs_label"></label>
			<div id = "custom-handle" class = "ui-slider-handle"></div>
	    </div><br/>
	</div><br/>
	<div>
		<b style = "margin-left: -20px;">Amount Monthly</b>
		<label id = "amount_monthly">Monthly Amount Test</label>
	</div>
	<div>
		<input id = "button" type = "submit" value = "Calculate">
	</div>

</div>

<?php get_footer(); ?>