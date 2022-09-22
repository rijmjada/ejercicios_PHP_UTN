<?php

$accion = isset($_POST["accion"]) ? (string) $_POST["accion"] : ""; // cambia a get o post
$nombre = isset($_POST["nombre"]) ?  (string) $_POST["nombre"] : "vacio";
$apellido = isset($_POST["apellido"]) ?  (string) $_POST["apellido"] : "vacio";
$legajo = isset($_POST["legajo"]) ? (int) $_POST["legajo"] : 1;

var_dump($_POST);

#region Ejercicio 1
if ($accion == "agregar") {
    $ar = fopen("./archivos/alumnos.txt", "a"); //A - append

    //ESCRIBO EN EL ARCHIVO CON FORMATO: legajo-apellido-nombre
    $cant = fwrite($ar, "{$legajo} - {$apellido} - {$nombre}\r\n");

    if ($cant > 0) {
        echo "<h2> registro AGREGADO </h2><br/>";
    }

    //CIERRO EL ARCHIVO
    fclose($ar);
}
#endregion

#region Ejercicio 2
if ($accion == "listar") {
    $ar = fopen("./archivos/alumnos.txt", "r");

    //LEO LINEA X LINEA DEL ARCHIVO 
    while (!feof($ar)) {
        $linea = fgets($ar);

        echo $linea;
    }

    //CIERRO EL ARCHIVO
    fclose($ar);
}
#endregion

#region Ejercicio 3
if ($accion == "verificar") {

    $ar = fopen("./archivos/alumnos.txt", "r");

    $esta = false;
    //LEO LINEA X LINEA DEL ARCHIVO 
    while (!feof($ar)) {

        $linea = fgets($ar);
        $array_linea = explode("-", $linea);
        $legajo_read = trim($array_linea[0]);

        if ($legajo_read == $legajo) {
            $esta = true;
            break;
        }
    }

    echo $esta ? "el legajo: $legajo SI se encuentra en el listado." : "el legajo: $legajo NO se encuentra en el listado.";

    //CIERRO EL ARCHIVO
    fclose($ar);
}
#endregion 

#region Ejercicio 4
if ($accion == "modificar") 
{

    #region Lectura
    $ar = fopen("./archivos/alumnos.txt", "r");
    $elementos = array();
    $LegajoEncontrado = false;

    //LEO LINEA X LINEA DEL ARCHIVO 
    while (!feof($ar)) 
    {

        $linea = fgets($ar);
        $array_linea = explode("-", $linea);

        $array_linea[0] = trim($array_linea[0]);

        if ($array_linea[0] != "") {
            //RECUPERO LOS CAMPOS
            $legajo_read = trim($array_linea[0]);
            $apellido_read = trim($array_linea[1]);
            $nombre_read = trim($array_linea[2]);

            if ($legajo_read == $legajo) {
                array_push($elementos, "{$legajo_read}-{$apellido}-{$nombre}\r\n");
                $LegajoEncontrado = true;
            } else
                array_push($elementos, "{$legajo_read}-{$apellido_read}-{$nombre_read}\r\n");
        }
    }

    fclose($ar);
    #endregion

    #region Escritura
    if ($LegajoEncontrado) 
    {
        //ABRO EL ARCHIVO
        $ar = fopen("./archivos/alumnos.txt", "w");

        $cant = 0;

        //ESCRIBO EN EL ARCHIVO
        foreach ($elementos as $item) {

            $cant = fwrite($ar, $item);
        }

        fclose($ar);
    }
    #endregion

    echo $LegajoEncontrado ? "El alumno con legajo: $legajo se ha modificado" : "El alumno con legajo: $legajo no se encuentra en el listado";

}
#endregion

#region Ejercicio 5
if($accion == "borrar")
{
     #region Lectura
     $ar = fopen("./archivos/alumnos.txt", "r");
     $elementos = array();
     $LegajoEncontrado = false;
 
     //LEO LINEA X LINEA DEL ARCHIVO 
     while (!feof($ar)) 
     {
 
         $linea = fgets($ar);
         $array_linea = explode("-", $linea);
 
         $array_linea[0] = trim($array_linea[0]);
 
         if ($array_linea[0] != "") {
             //RECUPERO LOS CAMPOS
             $legajo_read = trim($array_linea[0]);
             $apellido_read = trim($array_linea[1]);
             $nombre_read = trim($array_linea[2]);
 
             if ($legajo_read == $legajo) {
                $LegajoEncontrado = true;
             }
             else
                 array_push($elementos, "{$legajo_read}-{$apellido_read}-{$nombre_read}\r\n");
         }
     }
     fclose($ar);
     #endregion

    #region Escritura
    if ($LegajoEncontrado) 
    {
        //ABRO EL ARCHIVO
        $ar = fopen("./archivos/alumnos.txt", "w");

        $cant = 0;

        //ESCRIBO EN EL ARCHIVO
        foreach ($elementos as $item) {

            $cant = fwrite($ar, $item);
        }

        fclose($ar);
    }
    #endregion

    echo $LegajoEncontrado ? "El alumno con legajo: $legajo se ha borrado" : "El alumno con legajo: $legajo no se encuentra en el listado";
}
#endregion
