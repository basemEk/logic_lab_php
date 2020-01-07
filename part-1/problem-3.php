<?php
/*
 * Take the first and last name of the user and greet them.
 * */
function solution( $first_name, $last_name ) {
	echo "Hello \"$first_name $last_name\"";
	
	/*
	 * // another solution
	 * echo 'Hello "' . $first_name . ' ' . $last_name . '"';
	 * */
}


$first_name = readline( 'Please enter your first name: ' );
$last_name  = readline( 'Please enter your last name: : ' );

solution( $first_name, $last_name );
