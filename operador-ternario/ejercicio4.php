<?php
/*

Enunciado del ejercicio: Verificación de número par o impar
Crea un programa en PHP que reciba un número y utilice el operador ternario para verificar si el número es par o impar.

Si el número es par, muestra: "El número es par"

Si el número es impar, muestra: "El número es impar"
*/

$numero = 2.1;

$resultado = (is_numeric($numero) && $numero == intval($numero) && $numero % 2 == 0)
    ? "El número es par"
    : "El número es impar";

echo $resultado;
