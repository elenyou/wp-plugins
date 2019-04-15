<?php
/*
Plugin Name: Display Message For
Description: Displays a message.
Version: 1.0
Author: Elen
*/


//to writers
add_action('edit_form_advanced','display_message');

function display_message()
{
	echo ("
		<div>
			Wellcome to this post
		</div>
	");
}

//to admins
add_action('all_admin_notices','top_message');

function top_message()
{
	if(strpos($_SERVER['REQUEST_URI'],'post-new')>0 || strpos($_SERVER['REQUEST_URI'],'post.php')>0) {
		echo ("
		<div>
			Wellcome to this post
		</div>
	");
	}
}


?>