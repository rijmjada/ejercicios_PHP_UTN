<?php

require_once "clases/Mascota.php";
require_once "clases/Guarderia.php";

use Animalitos\Mascota;
use Negocios\Guarderia;


$mascota_1 = new Mascota("Boby","Salchicha");
$mascota_2 = new Mascota("Boby","Bulldog");
/*
// Muestro las mascotas
echo Mascota::mostrar($mascota_1);
echo "<br>";
echo $mascota_2->toString();

echo "<br>";

// Comparo
echo $mascota_1->equals($mascota_2);

echo "<br> <br> <br>";
*/
$mascota_3 = new Mascota("Pepe","Salchicha",3);
echo "<br>";
$mascota_4 = new Mascota("Pepe","Salchicha",2);

/*
// Muestro las mascotas
echo Mascota::mostrar($mascota_4);
echo "<br>";
echo $mascota_3->toString();

echo "<br>";

// Comparo
echo $mascota_3->equals($mascota_4);
*/
$miGuarderia = new Guarderia("La guardería de Pancho");

$miGuarderia->add($mascota_1);
$miGuarderia->add($mascota_2);
$miGuarderia->add($mascota_3);
$miGuarderia->add($mascota_4);

echo $miGuarderia->toString();