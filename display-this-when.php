<?php
/*
Plugin Name: Display This When...
Version: 1.0.1
Plugin URI: http://wolfiezero.com/wordpress/display-this-when/
Description: Display particular section of content within a post/page at a certain time and/day
Author: WolfieZero
Author URI: http://wolfiezero.com/
*/

add_shortcode( 'displaythis', 'displayThis' );

function displayThis($atts, $content=null){
	
	$html = null;

	$when	= $atts['when'];

	if(isset($atts['format']))
		$format	= $atts['format'];
	else
		$format = 'd-m-Y';

	$date	= date($format);

	if( $when == $date ) {
		$html = $content;
	} 

	return $html;

}