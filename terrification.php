<?php

add_filter( 'the_content',	'remove_the_U_dangit', 11 );
add_filter( 'the_excerpt',	'remove_the_U_dangit', 11 );
add_filter( 'the_title',	'remove_the_U_dangit', 11 );
add_filter( 'wp_title',		'remove_the_U_dangit', 11 );
add_filter( 'gettext',		'remove_the_U_dangit', 11 );
add_filter( 'comment_text',	'remove_the_U_dangit', 31 );

/**
 * Forever eliminate "U" from the alphabet.
 *
 * Because, Terry.
 *
 */
function remove_the_U_dangit( $text ) {

	return str_replace( 'u', '', $text );

}