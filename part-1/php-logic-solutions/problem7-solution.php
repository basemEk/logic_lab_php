<?php

function solution(){
$num1 = readline('Enter the first number: ');
$num2 = readline('Enter the second number: ');
$num3 = readline('Enter the third number: ');
$num4 = readline('Enter the fourth number: ');



if(is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
    echo "$num1 - $num2 * $num3 / $num4 = " . ($num1 - $num2 * $num3 / $num4);

    }
    else
    {
    echo 'wrong number entry!';
    exit;
    }
}

solution();


?>