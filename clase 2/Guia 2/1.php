<?php
/*
Aplicación No 15 (Potencias de números)
Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 
(hacer una función que las calcule invocando la función pow).
*/

function calcularPotencia(float $numero) : array
{
    $calculos = array();
    for($index=1; $index<5; $index++){
        array_push($calculos, pow($numero,$index));
    }
    return $calculos;
}


var_dump(calcularPotencia(3));