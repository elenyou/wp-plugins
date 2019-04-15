<?php
/*
Plugin Name: User Greeting
Description: Displays a message to anyone whose username starts with 'user'
Version: 1.0
Author: Elen
*/

add_action('admin_notices','show_notice');

function show_notice()
{
    //To capture details about the currently logged in user
    global $current_user;
    get_currentuserinfo();

    //if you want to greet usernames that begin with a specific prefix like "user"
    if(substr($current_user -> user_login,0,4) == "user")
    {
        echo "Hello, ". $current_user -> user_login;
    }

    //if you want to define an array
    $preffered_users = array('admin', 'user2');
    if(in_array($current_user -> user_login,$preffered_users))
    {
        echo "Hello, ". $current_user -> user_login . 'at' . $current_user -> user_email;
    }

    //if you want to capture an email domain
    if(strpos($current_user -> user_email,'abc.com'))
    {
        echo "Hello, ". $current_user -> user_login . 'at' . $current_user -> user_email;
    }

?>