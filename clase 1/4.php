<?php
/*
Aplicación Nº 4 (Sumar números)
Confeccionar un programa que sume todos los números enteros 
desde 1 mientras la suma no supere a 1000. 
Mostrar los números sumados y al finalizar el proceso indicar
cuantos números se sumaron.
*/

$inicio = 1;
$uno = 1;

while($inicio <= 1000)
{
    echo $inicio . " + " . $uno . "<br>";
    $inicio += $uno;
}

echo "<br>" . "Cantidad de numeros sumados: " . $inicio-1;

?>