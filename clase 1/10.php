<?php

/*
Aplicación Nº 10 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.
*/

$miArray = array();
$indice = 0;

while(count($miArray) <  10)
{
    if($indice % 2 != 0)
       array_push($miArray,$indice);
  
    $indice++;    
}

echo "Lista de numeros impares agregados al array: <br>";
foreach($miArray as $item)
{
    echo $item."<br>";
}

?>