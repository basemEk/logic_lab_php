<?php

function season(string $month){
    switch (strtolower( $month ) ){
        case 'december':
        case 'october':
        case 'november':
            echo 'Autumn';
        break;

        case 'july':
        case 'august':
        case 'september' :
            echo 'Summer';       
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

$month = readline('please enter the name of the month: ');
season($month);


?>