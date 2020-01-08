<?php

function solution( float $num1, float $num2, float $num3 ) {
	if ( substr( $num1, - 1 ) === substr( $num2, - 1 ) && substr( $num2, - 1 ) === substr( $num3, - 1 ) ) {
		echo 'They have the same last digit ';
	} else {
		echo 'They don’t have the same last';
	}
	exit;

}


$number_1 = readline( 'Please enter the first number: ' );
$number_2 = readline( 'Please enter the second number: ' );
$number_3 = readline( 'Please enter the third number: ' );

if ( is_numeric( $number_1 ) && is_numeric( $number_2 ) && is_numeric( $number_3 ) ) {
	solution( $number_1, $number_2, $number_3 );
} else {
	echo 'Wrong inputs';
	exit;
}
