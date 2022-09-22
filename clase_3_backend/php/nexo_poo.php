<?php
require_once("./Alumno.php");

use Ormeño\Alumno;

$accion = isset($_REQUEST["accion"]) ? (string) $_REQUEST["accion"] : null;
$nombre = isset($_POST["nombre"]) ?  (string) $_POST["nombre"] : null;
$apellido = isset($_POST["apellido"]) ?  (string) $_POST["apellido"] : null;
$legajo = isset($_POST["legajo"]) ? (int) $_POST["legajo"] : null;
$foto = isset($_REQUEST["foto"]) ? (string) $_REQUEST["foto"] : null;


switch ($accion) {
    case "agregar":
        $alu = new Alumno($legajo, $nombre, $apellido, $foto);
        if (Alumno::Agregar($alu))
            echo "<br> Alumno agregado <br>";
        else
            echo "<br> Error al intentar agregar el alumno <br>";
        break;

    case "listar":
        echo Alumno::Listar();
        break;

    case "modificar":
        $alu = new Alumno($legajo, $nombre, $apellido, $foto);
        if (Alumno::Modificar($alu))
            echo "Alumno modificado";
        else
            echo "no se pudo modificar";
        break;

    case "eliminar":
        if (Alumno::Eliminar($legajo))
            echo "Alumno eliminado";
        else
            echo "no se pudo eliminar";
        break;

    case "verificar":
        if (Alumno::Verificar($legajo))
            echo "El alumno con el legajo: $legajo se encuentra en la lista";
        else
            echo "El alumno con el legajo: $legajo NO se encuentra en la lista";
        break;

    default:
        echo "no ingreso una opción valida.";
        break;
}
