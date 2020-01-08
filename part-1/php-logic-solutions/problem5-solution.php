<?php

function circleArea ($radius){
    echo 'Enter radius value';
    echo 3.14 * $radius * $radius;
}

$radius = readline('Enter value of radius: ');
echo "the area of a circle of radius $radius  is = " . 3.14 * $radius * $radius;

?>

