<?php

/*

Enunciado del ejercicio:

Crea un programa en PHP que reciba la calificación de un estudiante (de 0 a 10) e imprima un mensaje según la nota obtenida:

Si la calificación es menor a 5, muestra: "Reprobado"

Si la calificación está entre 5 y 6.9, muestra: "Aprobado con nota baja"

Si la calificación está entre 7 y 8.9, muestra: "Aprobado con buen rendimiento"

Si la calificación es 9 o mayor, muestra: "Excelente desempeño"

Asegúrate de validar que el número esté dentro del rango permitido (0 a 10). Si no lo está, muestra: "Calificación no válida"
*/

$calificacion = 6.9;

if ($calificacion >= 0 && $calificacion < 5) {
    echo "Reprobado";
} elseif ($calificacion >= 5 && $calificacion < 7) {
    echo "Aprobado con nota baja";
} elseif ($calificacion >= 7 && $calificacion < 9) {
    echo "Aprobado con buen rendimiento";
} elseif ($calificacion >= 9 && $calificacion <= 10) {
    echo "Excelente desempeño";
} else {
    echo "Calificación no válida";
}
