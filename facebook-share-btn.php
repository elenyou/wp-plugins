<?php
/*
Plugin Name: Faccebook-share-btn
Description: Create a  Faccebook share button
Author: Elen
*/

add_action('the_content','add_facebook_share_btn');

function add_facebook_share_btn($content)
{
    $content = $content . ' <div class="fb-share-button"
    data-href="https://www.your-domain.com/your-page.html"
    data-layout="button_count">
    </div>';

    return $content;
}

?>