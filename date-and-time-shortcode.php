<?php
/*
Plugin Name: Date and Time Attribute
Description: Adds a simple shortcode to display the date and time.
Version: 1.0
Author: Elen
*/



add_shortcode('date-and-time','show_date_and_time');

function show_date_and_time($atts)
{

	return '<span style="background-color:'.$bgcolor.'; color:'.$color.'" >' . date('m/d/Y H:i:s') . '</span>';
}



?>