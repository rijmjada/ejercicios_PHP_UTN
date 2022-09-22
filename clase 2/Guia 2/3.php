<?php
/*
Aplicación No 17 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La función
validará que la cantidad de caracteres que tiene $palabra no supere a $max y además deberá
determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.
*/

function app17(string $palabra, int $max) : bool
{
    $len = strlen($palabra);
    if( $len <= $max &&
        (str_contains($palabra,"Recuperatorio") ||
            str_contains($palabra,"Parcial") ||
             str_contains($palabra,"Programacion")))
    {
        return true;
    }
    return false;
}

if(app17("Programacion",11))
    echo "1";
else
    echo "0";