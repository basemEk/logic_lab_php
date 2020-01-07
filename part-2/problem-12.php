<?php
/*
 * Take 5 numbers and print their minimum and maximum
 *
 * */
function solution( float $num1, float $num2, float $num3, float $num4, float $num5 ) {
	echo "Min: " . min( $num1, $num2, $num3, $num4, $num5 ) . " Max: " . max( $num1, $num2, $num3, $num4, $num5 );
	exit;
}


$number_1 = readline( 'Please enter the first number: ' );
$number_2 = readline( 'Please enter the second number: ' );
$number_3 = readline( 'Please enter the third number: ' );
$number_4 = readline( 'Please enter the fourth number: ' );
$number_5 = readline( 'Please enter the fifth number: ' );

if ( is_numeric( $number_1 ) && is_numeric( $number_2 ) && is_numeric( $number_3 ) && is_numeric( $number_4 ) && is_numeric( $number_5 ) ) {
	solution( $number_1, $number_2, $number_3, $number_4, $number_5 );
} else {
	echo 'Wrong inputs';
	exit;
}
