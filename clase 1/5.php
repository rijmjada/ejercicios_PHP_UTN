<?php
/*
Aplicación Nº 5 (Obtener el valor del medio)
Dadas tres variables numéricas de tipo entero $a, $b y $c, realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”
*/

$a = 1;
$b = 3;
$c = 10;

function intermedio($n1, $n2, $n3)
{
    if($n1 != $n2 && $n3 != $n1 && $n3 != $n2)
    {
       $nums = array($n1,$n2,$n3);
       sort($nums);
       return "Valor medio: " . $nums[1];    
    }
    return "No hay valor medio";
}

echo intermedio(11,9,8);

?>