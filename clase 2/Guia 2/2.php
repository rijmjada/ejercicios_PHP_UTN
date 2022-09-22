<?php
/*
Aplicación No 16 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden de las
letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
*/

function invertirCadena(array $arrayCaracteres)
{
    $arrayAux = array();
    $len = count($arrayCaracteres) - 1;
    for($i = $len; $i >=0; $i--)
    {
        array_push($arrayAux, $arrayCaracteres[$i]);
    }
    return $arrayAux;
}

$saludo = array("H","O","L","A");

var_dump(invertirCadena($saludo));