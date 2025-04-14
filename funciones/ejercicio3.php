<?php

// Función nombrada (sin parámetros)
// Esta función simplemente imprime un mensaje cuando se llama
function saludoMotivador()
{
    echo "Sigue programado, no te rindas";
}
saludoMotivador();  // Llamada a la función, que imprime directamente el mensaje
echo "<br/>";

// Función nombrada con un parámetro
// Esta función recibe un argumento ($nombre) y devuelve un mensaje con ese nombre
function motivacion_msg($nombre)
{
    return "Sigue Programando $nombre";
}
echo motivacion_msg("Carlos");  // Llamada a la función con el parámetro "Carlos"

// Función anónima (también conocida como función sin nombre)
// Esta función es asignada a una variable y se ejecuta a través de esa variable
$saludo = function () {
    return "Sigue adelante";
};

echo $saludo(); // Llamada a la función anónima y se imprime el valor retornado
