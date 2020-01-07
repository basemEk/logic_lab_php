<?php
/*
 * Create a Switch/Case that will log the season based on the month.
 * */
function solution( string $month ) {
	switch ( strtolower( $month ) ) {
		case 'july':
		case 'august':
		case 'september':
			echo 'Summer';
			break;
		case 'october':
		case 'november':
		case 'december':
			echo 'Autumn';
			break;
		case 'january':
		case 'february':
		case 'march':
			echo 'Winter';
			break;
		case 'april':
		case 'may':
		case 'june':
			echo 'spring';
			break;
		default:
			echo 'Wrong month';
			break;
	}
}


$month = readline( 'Please enter the month in english: ' );

solution( $month );
