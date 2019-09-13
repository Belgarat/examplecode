<?php
/**
 * Plugin Name: Wordpress plugin base
 * Description: Sample code for worpdress plugin
 */
//Return string for shortcode
function func_wp_vue(){
    //Build String
    $str= "<div>"
    ."Hello, hello and hello."
    ."</div>";
    //Return to display
    return $str;
} // end function
//Add shortcode to WordPress
add_shortcode( 'wpvue', 'func_wp_vue' );
?>
