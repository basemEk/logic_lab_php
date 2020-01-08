<?php

function compareThreeNum(){
var_export([1,2,3]);

$solution_number = '1'; 
$num1 = readline('Enter the first number: ');
$num2 = readline('Enter the second number: ');
$num3 = readline('Enter the third number: ');

switch($solution_number){
    case '1':
        var_export(($num1==$num2) && ($num2==$num3));
    break;

    case '2':
        var_export(($num3 > $num2) && ($num2 > $num3));
    break;

    case '3':
        var_export(($num1==$num2) || ($num2==$num3) || ($num1==$num3));
    break;

    default:
			echo 'Wrong solution';
			break;
}
}
compareThreeNum();


?>