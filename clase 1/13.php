<?php
/*
Aplicación Nº 13 (Arrays asociativos II)
Cargar los tres arrays con los siguientes valores y luego ‘juntarlos’ en uno. Luego mostrarlo por
pantalla.

“Perro”, “Gato”, “Ratón”, “Araña”, “Mosca”
“1986”, “1996”, “2015”, “78”, “86”
“php”, “mysql”, “html5”, “typescript”, “ajax”

Para cargar los arrays utilizar la función array_push. Para juntarlos, utilizar la función
array_merge.
*/

// Defino los arrays
$array_1 = array("Perro", "Gato", "Ratón", "Araña", "Mosca");
$array_2= array("1986", "1996", "2015", "78", "86");
$array_3 = array("php", "mySql", "html5", "typescript", "ajax");

// Cargo los items de los array 2 y 3 en el 1°
foreach($array_2 as $item){
    array_push($array_1, $item);
}
foreach($array_3 as $item){
    array_push($array_1, $item);
}

// Imprimo los valores del 1° array
foreach($array_1 as $item)
{
    echo $item . "<hr>";
}

