<?php
/*
Aplicación Nº 11 (Carga aleatoria)
Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';
*/

$miArrayAsociativo = array(
    1 => 90,
    30 => 7,
    'e' => 99,
    'hola' => 'mundo'
);

foreach($miArrayAsociativo as $clave=>$valor){
    echo "Clave: $clave || Valor: $valor <hr> <br>";
}
?>