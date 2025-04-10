<?php

/*

Enunciado del ejercicio:
Crea un programa en PHP que reciba la edad de una persona y muestre un mensaje según la etapa de la vida en la que se encuentra:

Si la edad es menor que 0 o mayor que 120, muestra: "Edad no válida"

Si la edad es menor de 12 años, muestra: "Niñez"

Si la edad está entre 12 y 17 años, muestra: "Adolescencia"

Si la edad está entre 18 y 64 años, muestra: "Adultez"

Si la edad es 65 o mayor, muestra: "Vejez"
*/

$edad = 1.2;

if (!is_int($edad) || $edad < 0 || $edad > 120) {
    echo "Edad no válida";
} elseif ($edad < 12) {
    echo "Niñez";
} elseif ($edad <= 17) {
    echo "Adolescencia";
} elseif ($edad <= 64) {
    echo "Adultez";
} else {
    echo "Vejez";
}
