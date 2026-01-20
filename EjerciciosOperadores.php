<?php


/*Crea un código PHP donde crees las variables $numberOne y $numberTwo y asigna valor 8 al primer
número y 5 al segundo número:

a) El resto de dividir el primer número entre 5.
b) El resultado de dividir el primer número entre el segundo.
c) El resultado de sumar los dos números.
*/
$numberOne = 8;
$numberTwo = 5;

$division = $numberOne%5;
echo "$division, ";

$division = $numberTwo/$numberTwo;
echo "$division, ";

echo $numberOne + $numberTwo;



/* EJERCICIO 2
Crea un código PHP donde crees las variables $a y $b y usando todos los operadores vistos en clase
adecuados haz que se muestren los mensajes por pantalla.
Los operadores que debéis de practicar serán:
• Operadores lógicos y de comparación.
• Operadores aritméticos.
• Operadores de incremento y decremento.
• Operadores de asignación. */

$a = 10;
$b = 5;

$answer = "";

$a > $b ? $answer =" 'Mayor que' correcto\n" : $answer ="Mayor que incorrecto\n";
echo $answer;
$b < $a ? $answer ="'Menor que' correcto\n" : $answer ="Menor que incorrecto\n";
echo $answer;
$a == 10 ? $answer ="'Igual que' correcto\n" : $answer ="Igual que incorrecto\n";
echo $answer;
$a <> $b ? $answer ="'Distinto' correcto\n" : $answer ="Distinto incorrecto\n";
echo $answer;
$a++ == 11 ? $answer ="'Incremento' correcto\n" : $answer ="Incremento incorrecto\n";
echo $answer;
--$a == 10 ? $answer ="'Incremento' correcto\n" : $answer ="Incremento incorrecto\n";
echo $answer;

?>