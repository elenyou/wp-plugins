<?php

/*
 * Plugin Name: Hello Page and Post
 * Description: This plugin displays Hello World at the end of every page and post.
 * Version: 1.0
 * Author: ELen
 */

add_filter('the_content','display_hello_world');

function display_hello_world($content)
{
	return $content . '<p>HELLO WORLD!!!</p>';
}

