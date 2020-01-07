<?php
/*
 * Take the temperature of the user in Celsius scale and convert it to Fahrenheit and print it.
 * Formula: F = C * (9/5) + 32
 * */
function solution( float $celsius ) {
	echo $celsius * ( 9 / 5 ) + 32;
	
}


$celsius = readline( 'Please enter the the Celsius temperature: ' );

if ( is_numeric( $celsius ) ) {
	solution( $celsius );
} else {
	echo 'Wrong inputs';
	exit;
}
