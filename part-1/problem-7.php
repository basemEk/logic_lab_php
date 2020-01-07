<?php
/*
 * Take 4 numbers x, y, z, w and compute x + -y * w / z. Print the result
 *
 * */
function solution( float $x, float $y, float $z, float $w ) {
	echo ceil( $x + - $y * $w / $z );
	exit;
	/*
	 * // Another solution
	 * echo round(pi() * $radius * $radius, 2);
	 * */
}


$number_1 = readline( 'Please enter the first number: ' );
$number_2 = readline( 'Please enter the second number: ' );
$number_3 = readline( 'Please enter the third number: ' );
$number_4 = readline( 'Please enter the fourth number: ' );

if ( is_numeric( $number_1 ) && is_numeric( $number_2 ) && is_numeric( $number_3 ) && is_numeric( $number_4 ) ) {
	solution( $number_1, $number_2, $number_3, $number_4 );
} else {
	echo 'Wrong inputs';
	exit;
}
