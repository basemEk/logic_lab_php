<?php
function checker() {
$num1 = readline('please enter the first number');
$num2 = readline('please enter the second number');

if($num1 === $num2){
    echo 'true';
}
else{
echo 'Wrong input';
exit;
}
}
checker();
?>