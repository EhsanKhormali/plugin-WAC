<?php
/**
 * @version 1.0.0
 */

/*
 * Plugin Name: WAC
 * Author: Ehsan khormali
 * Version: 1.0.0
 */
 
 /*
WAC is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

WAC is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with WAC. If not, see {URI to Plugin License}.
*/


function remove_unused_tags($content)
{
	return wp_strip_all_tags($content)	;
}
 
add_filter('the_content', 'remove_unused_tags');


foreach ( array( 'the_content', 'the_title', 'comment_text','the_excerpt' ) as $hook ){
    remove_filter( $hook, 'wpautop' );
}
   
?>

