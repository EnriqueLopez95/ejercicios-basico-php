<?php

/*
Enunciado del ejercicio: Edad mínima para votar
Crea un programa en PHP que reciba la edad de una persona y utilice el operador ternario para mostrar uno de los siguientes mensajes:

Si la persona tiene 18 años o más: "Puedes votar"

Si la persona tiene menos de 18 años: "No puedes votar todavía"
*/

$edad = 17;

$resultado = (is_numeric($edad) && $edad >= 18) ? "Puedes votar" : "No puedes votar todavía";

echo $resultado;
