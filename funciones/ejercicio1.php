<?php

/* 

Podemos verlas como un chef mágico
al cual tú le das los ingredientes y te devuelve un pastel ya hecho.
*/



function get_pokemon()
{


    $numero_aleatorio = rand(1, 5);

    switch ($numero_aleatorio) {
        case 1:
            echo "Pikachu";
            break;

        case 2:
            echo "Charmander";
            break;

        case 3:
            echo "Mewtwo";
            break;

        default:
            echo "Lo siento, no hay pokemón";
    }
}


get_pokemon();
