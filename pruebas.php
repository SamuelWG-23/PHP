<?php
/*
$edades = [
    "Antonio" => 31,
    "Juan" => 24,
    "Paco" => 28
];

foreach ($edades as $value) {
    echo "$value ";
}

foreach ($edades as $key => $value) {
    echo "$key: $value ";
}

function add($number1, $number2){
    return $number1 + $number2;
}

echo add(3,6)
*/

$menu = 0;

switch($menu){

    case 1:
        function add($number1, $number2){
        return $number1 + $number2;
        }

        function substract($number1, $number2){
        return $number1 - $number2;
        }

    case 2:
                function add($number1, $number2){
        return $number1 + $number2;
        }


}


?>