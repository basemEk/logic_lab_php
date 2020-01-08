<?php

function Average (){
    $num1 = readline('Enter the first number: ');
    $num2 = readline('Enter the second number: ');
    $num3 = readline('Enter the third number: ');
    $sum = $num1 + $num2 + $num3;

    echo 'The Average is: ' . $sum/2 ;
}
 Average();

?>