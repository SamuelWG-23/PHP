<?php

/*
EJERCICIO 1
Analiza el siguiente código PHP:
switch ($month) {
case 1:
echo ("It’s january");
break;
case 2: echo (" It’s february"");
break;
case 10: echo ("It’s october");
break;
default: echo ("The month is not january, february or october ");
break;
}
Responde a las siguientes cuestiones:
a) ¿Qué es lo que hace este código?
b) Completa el código de forma que añadas las etiquetas y definas el valor de $month= 1. ¿Cuál es el
código completo? ¿Cuál es el resultado obtenido por pantalla?

RESPUESTA
a) Este código dependiendo del valor de la variable $month emitirá un mensaje en el que sñalará si el mes corresponde
con el valor emitido o con ninguno de ellos.
b)
$month = 1;
switch ($month) {
case 1:
echo ("It’s january");
break;
case 2: echo (" It’s february");
break;
case 10: echo ("It’s october");
break;
default: echo ("The month is not january, february or october ");
break;
}
    Emitirá un mensaje de "It's January"



EJERCICIO 2
Considera estás desarrollando una web donde trabajas con tipos de motor. Define una variable
$motorType y asígnale valor 3. Los valores posibles son 1, 2, 3, 4. A través de un condicional switch
haz lo siguiente:
a) Si el tipo de motor es 0, mostrar un mensaje indicando “No hay establecido un valor
definido para el tipo de bomba”.
b) Si el tipo de motor es 1, mostrar un mensaje indicando “La bomba es una bomba de agua”.
c) Si el tipo de motor es 2, mostrar un mensaje indicando “La bomba es una bomba de
gasolina”.
d) Si el tipo de motor es 3, mostrar un mensaje indicando “La bomba es una bomba de
hormigón”.
e) Si el tipo de motor es 4, mostrar un mensaje indicando “La bomba es una bomba de pasta
alimenticia”.
f) Si no se cumple ninguno de los valores anteriores mostrar el mensaje “No existe un valor
válido para tipo de bomba”.
¿Cuál es el código completo? ¿Cuál es el resultado obtenido por pantalla?.


*/
$motorType = 3;

switch($motorType){

    case 0:
        echo("No hay establecido un valor definido para el tipo de bomba");
        break;
    case 1:
        echo ("La bomba es una bomba de agua");
        break;
    case 2:
        echo ("La bomba es una bomba de gasolina");
        break;
    case 3:
        echo ("La bomba es una bomba de hormigón");
        break;
    case 4:
        echo ("La bomba es una bomba de pasta alimenticia");
        break;
    default:
        echo ("No existe un valor válido para tipo de bomba");
        break;

}

?>
