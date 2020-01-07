<?php
/*
 * Take 3 numbers (a, b, c) from the user:
 * a) Print true if they are equal, print false if they are not.
 * b) Print true if c > b >a, print false otherwise.
 * c) Print true if 2 of them are equal, print false otherwise.
 * */
function solution( float $num1, float $num2, float $num3 ) {
	$solution_number = readline( 'Please enter the solution index (a/b/c): ' );;
	
	switch ( $solution_number ) {
		case 'a':
			var_export( $num1 === $num2 && $num2 === $num3 );
			break;
		case 'b':
			var_export( $num3 > $num2 && $num2 > $num1 );
			break;
		case 'c':
			var_export( ( $num1 === $num2 ) || $num1 === $num3 || $num3 === $num2 ) && ! ( $num1 === $num2 && $num2 === $num3 );
			break;
		default:
			echo 'Wrong solution index';
			break;
	}
}


$number1 = readline( 'Please enter the first number: ' );
$number2 = readline( 'Please enter the second number: ' );
$number3 = readline( 'Please enter the third number: ' );

if ( is_numeric( $number1 ) && is_numeric( $number2 ) ) {
	solution( $number1, $number2, $number3 );
} else {
	echo 'Wrong inputs';
	exit;
}
