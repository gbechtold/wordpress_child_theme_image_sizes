<?php

/* Imagesizes for Wordpress Child themes using functions.php
------------------------------------------------------------
This Extensions allows you to add additional Imagesizes to your Child Wordpress Childthemes.
To install this Extension, simply add it to the functions.php file of your wordpress child theme.

Note that each activated imagesize produces a copy of every single image that is uploaded.
Every size defined by the parameters "add_image_size( 'custom-size', height, width, array( 'left', 'top' ), crop)"
For additional information look into: http://codex.wordpress.org/Function_Reference/add_image_size

The first set is folling the Fibonacci sequence and its respective aspect ratio.
The second set is optimized for typical blogging dimensions, only altering the width of the image and keeping hight and aspect ratio. 

twitter: @GuntramBechtold, starsmedia.com
*/


function add_image_sizes() {
add_image_size( 'f285', 285, 176, TRUE );
add_image_size( 'f300', 300, 185, TRUE );
add_image_size( 'f450', 450, 278, TRUE );
add_image_size( 'f600', 600, 371, TRUE );
add_image_size( 'f950', 950, 587, TRUE );
add_image_size( 'r285', 285);
add_image_size( 'r300', 300);
add_image_size( 'r450', 450);
add_image_size( 'r600', 600);
add_image_size( 'r950', 950);
}
add_action( 'init', 'add_image_sizes' );

function display_image_sizes($sizes) {
$sizes['f285'] = __( 'Fibonacci 285' );
$sizes['f300'] = __( 'Fibonacci 300' );
$sizes['f450'] = __( 'Fibonacci 450' );
$sizes['f600'] = __( 'Fibonacci 600' );
$sizes['f950'] = __( 'Fibonacci 950' );
$sizes['r285'] = __( 'Raw 285' );
$sizes['r300'] = __( 'Raw 300' );
$sizes['r450'] = __( 'Raw 450' );
$sizes['r600'] = __( 'Raw 600' );
$sizes['r950'] = __( 'Raw 950' );

return $sizes;
}
add_filter('image_size_names_choose', 'display_image_sizes');

// End Imagesizes for Wordpress Child Themes