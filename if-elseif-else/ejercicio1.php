<?php

/*

Ejercicio: Verificar número par, impar o cero
Crea un programa en PHP que guarde un número entero en una variable. El programa debe determinar si el número:

Es cero, y mostrar: "El número es cero."

Es par, y mostrar: "El número es par."

Es impar, y mostrar: "El número es impar."

Para esto, utiliza la estructura if, elseif y else, además del operador módulo (%) para comprobar si el número es divisible entre 2.

*/

$numero = 1.1; // Definimos el número a evaluar

if (!is_int($numero)) { // Verificamos si el valor no es un número entero
    echo "Por favor ingresa un número entero.";
} elseif ($numero == 0) { // Verificamos si el número es exactamente cero
    echo "El número es cero.";
} elseif ($numero % 2 == 0) { // Verificamos si el número es par 
    echo "El número es par.";
} else {
    echo  "El número es impar.";
}
