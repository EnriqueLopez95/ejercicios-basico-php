<?php

/*

Enunciado:
Crea un programa en PHP que reciba un año y determine si es un año bisiesto.
El programa debe validar que el número ingresado sea un entero positivo mayor que cero.
Si el valor no cumple con esta condición, debe mostrar el mensaje: "Debe ingresar un número entero mayor que 0"
Si el año ingresado es bisiesto, debe mostrar: "[AÑO] es un año bisiesto"
De lo contrario, debe mostrar: "El año ingresado no es bisiesto"
*/

$year = 1996;

if (!is_int($year) || $year <= 0) {
    echo "Debe ingresar un número entero mayor que 0";
} elseif (($year % 4 == 0) && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "$year es un año bisiesto";
} else {
    echo "El año ingresado no es bisiesto";
}
