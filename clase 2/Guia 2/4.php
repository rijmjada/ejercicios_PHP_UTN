<?php
/*
Aplicación No 18 (Par e impar)
Crear una función llamada EsPar que reciba un valor entero como parámetro y devuelva TRUE si
este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función EsImpar.
*/

function esPar(int $valor) : bool
{
   return $valor % 2 == 0 ? true : false;
}

echo esPar(2);