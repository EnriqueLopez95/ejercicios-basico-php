<?php

/*
Enunciado:
Crea un programa en PHP que reciba una hora en formato de 24 horas (por ejemplo, 14 para las 2 PM) y determine si es hora de mañana, tarde o noche:

Si la hora está entre 5 y 11, debe mostrar "Es hora de mañana".
Si la hora está entre 12 y 17, debe mostrar "Es hora de tarde".
Si la hora está entre 18 y 4 (hasta antes de las 5 AM), debe mostrar "Es hora de noche".
Si la hora está fuera del rango de 0 a 23, debe mostrar "Hora no válida".

Tareas:
Validar que el valor ingresado sea un número entre 0 y 23.
Usar un operador ternario para determinar en qué parte del día se encuentra la hora.
*/




$hora = 14;

$resultado = ($hora > 0 && $hora < 23)
    ? (($hora >= 5 && $hora <= 11) ? "Es hora de mañana" : (($hora >= 12 && $hora <= 17) ? "Es hora de tarde"  :
            "Es hora de noche"))
    : "Hora no válida";

echo $resultado;
