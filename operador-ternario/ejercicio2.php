<?php

/*

Enunciado del ejercicio con ternario
Crea un programa en PHP que reciba una cadena de texto (por ejemplo, el nombre de un producto) y determine si está vacía o no utilizando un operador ternario.

Debe mostrar uno de los siguientes mensajes:

Si la cadena está vacía: "No ingresaste ningún texto"

Si la cadena contiene algo: "Texto recibido: [texto]" (sustituyendo [texto] por el valor real)
*/

$cadena = "";

$texto = (trim($cadena) === "") //trim detecta espacios en blanco
    ?  "No ingresaste ningún texto"
    : "Texto recibido: $cadena";

echo $texto;
