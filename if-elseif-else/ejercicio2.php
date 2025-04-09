<?php

/*

Ejercicio: Verificación de número positivo, negativo o neutro
Crea un programa en PHP que guarde un número en una variable y verifique si ese número:

Es positivo, y mostrar: "El número es positivo."

Es negativo, y mostrar: "El número es negativo."

Es cero (neutro), y mostrar: "El número es neutro."
*/

if (!is_numeric($numero)) {
    echo "Por favor ingresa un número válido.";
} else {
    if ($numero > 0) {
        echo "El número es positivo.";
    } elseif ($numero < 0) {
        echo "El número es negativo.";
    } else {
        echo "El número es neutro.";
    }
}
