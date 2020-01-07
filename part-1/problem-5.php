<?php
/*
 * Take the radius of a circle and print its area.
 * */
function solution( float $radius ) {
	echo round( 3.1416 * $radius * $radius, 2 );
	
	/*
	 * // Another solution
	 * echo round(pi() * $radius * $radius, 2);
	 * */
}


$radius = readline( 'Please enter the radius of a circle: ' );

if ( is_numeric( $radius ) ) {
	solution( $radius );
} else {
	echo 'Wrong inputs';
	exit;
}
