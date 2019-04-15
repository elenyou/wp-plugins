<!-- dashboard widget -->
<?php

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
	global $wp_meta_boxes;

	wp_add_dashboard_widget('custom_help_widget', 'Good morning', 'custom_dashboard_help');
}
function custom_dashboard_help() {
	global $current_user;
	$username = $current_user->user_login;

	echo 'Greetings, '.$username.'. Today is ' . Date('m/d/Y');
}

?>

<!-- admin footer -->
<?php
add_action('admin_footer_text','change_footer');

function change_footer()
{
	echo ("
	<p>
	Thank you for watching this video tutorial on the admin_footer_text hook.
	<a href='http://www.facebook.com'>
	<img src='http://www.bookstore.washington.edu/_kids/images/buttons/facebook_button.jpg' border='0'/>
	</a>
	</p>
	");
}
?>


