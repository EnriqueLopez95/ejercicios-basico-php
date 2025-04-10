<?php

/*

Enunciado del ejercicio (con operador ternario)
Crea un programa en PHP que reciba un número entero y determine si es positivo, negativo o cero, utilizando operadores ternarios.

Debe mostrar uno de los siguientes mensajes según el caso:

"El número es positivo"

"El número es negativo"

"El número es cero"
*/

$numero = 0;

$resultado = ($numero > 0)
    ? "El número es positivo"
    : (($numero < 0)
        ? "El número es negativo"
        : "El número es cero");

echo $resultado;
