<?php
/*
 * Take 2 numbers width and height and print the perimeter and area of a rectangle.
 *
 * */
function solution( float $width, float $height ) {
	echo "Perimeter" . ( $height * 2 + $width * 2 );
	echo "\nArea" . ( $height * $width );
	exit;
}

$number_1 = readline( 'Please enter the first number: ' );
$number_2 = readline( 'Please enter the second number: ' );

if ( is_numeric( $number_1 ) && is_numeric( $number_2 ) ) {
	solution( $number_1, $number_2 );
} else {
	echo 'Wrong inputs';
	exit;
}
