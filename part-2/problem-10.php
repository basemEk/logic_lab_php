<?php
/*
 * Take a number and check if it’s even or odd
 * */
function solution( int $number ) {
	echo $number % 2 === 0 ? 'Even' : 'Odd';
}


$number = readline( 'Please enter the number: ' );

if ( is_numeric( $number ) ) {
	solution( $number );
} else {
	echo 'Wrong inputs';
	exit;
}
