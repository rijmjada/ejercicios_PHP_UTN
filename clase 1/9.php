<?php
/*
Aplicación Nº 9 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 10. Mostrar un mensaje por pantalla informando el
resultado.
*/ 

$miArray = array();

// Cargo los numeros random
for($i=0; $i<5; $i++)
{
    $miArray[$i] = rand(1,3);
}

// Calculo el promedio
$acumulador = 0;
foreach($miArray as $i)
{
    $acumulador += $i;
}

// Determino si el promedio acumulado es mayor o menor a 10
$ret = $acumulador > 10 ? "es mayor a 10" :  "es menor a 10";

echo $ret . "<br>" . $acumulador;

?>