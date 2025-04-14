<?php


function es_estudiante($puntos)
{

    if ($puntos >= 20000) {
        echo "Eres un buen estudiante";
    } else {
        echo "No eres buen estudiante";
    }
}

es_estudiante(1);
