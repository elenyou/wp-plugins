<?php
/*
Plugin Name: Fix WordPress
Description: Change the spelling of WordPress to capital P
Version: 1.0
Author: Elen
 */

// Filter hook
add_filter('the_content',array('elenplugins_fix_wordpress','fix_spelling'));

class elenplugins_fix_wordpress
{
	function fix_spelling($content)
	{
		$content= str_replace('Wordpress','WordPress',$content);
		return "$content";
	}
}

?>
