<?php
/*
 * Take two numbers. Print true if they are equal, print false if they are not.
 * */
function solution( float $num1, float $num2 ) {
	var_export( $num1 === $num2 );
}


$number1 = readline( 'Please enter the first number: ' );
$number2 = readline( 'Please enter the second number: ' );

if ( is_numeric( $number1 ) && is_numeric( $number2 ) ) {
	solution( $number1, $number2 );
} else {
	echo 'Wrong inputs';
	exit;
}
