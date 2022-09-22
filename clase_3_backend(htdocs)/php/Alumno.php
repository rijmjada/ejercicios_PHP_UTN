<?php

namespace Ormeño;

class Alumno
{
    #region Atributos
    public int $_legajo;
    public string $_nombre;
    public string $_apellido;
    #endregion

    #region Constructor
    public function __construct(int $legajo, string $nombre, string $apellido)
    {
        $this->_legajo = $legajo;
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
    }
    #endregion

    #region Metodos

    #region Agregar
    public static function Agregar(Alumno $alu): bool
    {
        $ret = false;
        $ar = fopen("./archivos/alumnos.txt", "a"); //A - $append

        //ESCRIBO EN EL ARCHIVO CON FORMATO: legajo-apellido-nombre
        $cant = fwrite($ar, "{$alu->_legajo}-{$alu->_nombre}-{$alu->_apellido}\r\n");

        if ($cant > 0) {
            $ret = true;
        }

        //CIERRO EL ARCHIVO
        fclose($ar);
        return $ret;
    }
    #endregion

    #region Listar
    public static function Listar(): string
    {
        $ret = "";
        $ar = fopen("./archivos/alumnos.txt", "r");

        //LEO LINEA X LINEA DEL ARCHIVO 
        while (!feof($ar)) {
            $linea = fgets($ar);
            $ret .= $linea . "<br>";
        }

        //CIERRO EL ARCHIVO
        fclose($ar);
        return $ret;
    }
    #endregion

    #region Modificar
    public static function Modificar(Alumno $alu): bool
    {

        #region Lectura
        $ar = fopen("./archivos/alumnos.txt", "r");
        $elementos = array();
        $LegajoEncontrado = false;

        //LEO LINEA X LINEA DEL ARCHIVO 
        while (!feof($ar)) {

            $linea = fgets($ar);
            $array_linea = explode("-", $linea);

            $array_linea[0] = trim($array_linea[0]);

            if ($array_linea[0] != "") {
                //RECUPERO LOS CAMPOS
                $legajo_read = trim($array_linea[0]);
                $apellido_read = trim($array_linea[1]);
                $nombre_read = trim($array_linea[2]);

                if ($legajo_read == $alu->_legajo) {
                    array_push($elementos, "{$legajo_read}-{$alu->_apellido}-{$alu->_nombre}\r\n");
                    $LegajoEncontrado = true;
                } else
                    array_push($elementos, "{$legajo_read}-{$apellido_read}-{$nombre_read}\r\n");
            }
        }

        fclose($ar);
        #endregion


        #region Escritura
        if ($LegajoEncontrado) {
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

        return $LegajoEncontrado ? true : false;
    }
    #endregion

    #region Eliminar
    public static function Eliminar(int $legajo)
    {
        #region Lectura
        $ar = fopen("./archivos/alumnos.txt", "r");
        $elementos = array();
        $LegajoEncontrado = false;

        //LEO LINEA X LINEA DEL ARCHIVO 
        while (!feof($ar)) {

            $linea = fgets($ar);
            $array_linea = explode("-", $linea);

            $array_linea[0] = trim($array_linea[0]);

            if ($array_linea[0] != "") {
                //RECUPERO LOS CAMPOS
                $legajo_read = trim($array_linea[0]);
                $apellido_read = trim($array_linea[1]);
                $nombre_read = trim($array_linea[2]);

                if ($legajo_read == $legajo) {
                    // si lo encuentro no lo agrego al array(es la unica linea que cambia con Modificar())
                    $LegajoEncontrado = true;
                } else
                    array_push($elementos, "{$legajo_read}-{$apellido_read}-{$nombre_read}\r\n");
            }
        }

        fclose($ar);
        #endregion


        #region Escritura
        if ($LegajoEncontrado) {
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

        return $LegajoEncontrado ? true : false;
    }
    #endregion

    #region Verificar 
    public static function Verificar($legajo) : bool
    {
        $ar = fopen("./archivos/alumnos.txt", "r");

        $verificado = false;
        //LEO LINEA X LINEA DEL ARCHIVO 
        while (!feof($ar)) {
    
            $linea = fgets($ar);
            $array_linea = explode("-", $linea);
            $legajo_read = trim($array_linea[0]);
    
            if ($legajo_read == $legajo) {
                $verificado = true;
                break;
            }
        }    
        //CIERRO EL ARCHIVO
        fclose($ar);

        return $verificado;
    }
    #endregion
}
