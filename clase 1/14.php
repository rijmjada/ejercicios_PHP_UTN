<?php
/*
Aplicación Nº 14 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.
*/
// Defino los arrays
$array_1 = array("Perro", "Gato", "Ratón", "Araña", "Mosca");
$array_2= array("1986", "1996", "2015", "78", "86");
$array_3 = array("php", "mySql", "html5", "typescript", "ajax");

$asociativo = array(
    "Animalitos" => $array_1,
    "Años" => $array_2,
    "Lenguajes" => $array_3
);

$indexado = array($array_1, $array_2, $array_3);

echo "<h2> Array asociativo </h2><hr><br>";

foreach($asociativo as $k=>$v){
    echo "Key: $k <br>" . var_dump($v); 
}

echo "<br><h2>Array indexado</h2><hr><br>";

var_dump($indexado);