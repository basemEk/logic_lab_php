<?php

function solution(float $length,float $width) {

   echo "perimeter" . (2 * ($length + $width)); 
   echo "\narea" . ($length * $width);
   exit;
}

$perimeter = readline('Enter the length of rectangle: '); 
$area = readline('Enter the width of the rectangle: ');


if ( is_numeric( $perimeter ) && is_numeric( $area ) ) {
	solution( $perimeter , $area);
} else {
	echo 'Wrong inputs';
	exit;
}

?>