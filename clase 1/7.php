<?php
/*
Aplicación Nº 7 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.

https://www.php.net/manual/es/function.date.php
*/


$fecha = date("Y-m-d"); // 2022 - 08 - 23
$hora = date("g a  e");
$bisiesto = date("L");

echo "<br> La fecha es : " . $fecha;
echo "<br> La hora es : " . $hora;

if($bisiesto == false)
    echo "<br> No es un año bisiesto.";
else 
    echo "<br> Es un año bisiesto.";

?>