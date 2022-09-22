<?php
namespace Negocios;

require_once "clases/Mascota.php";
use Animalitos\Mascota;

class Guarderia
{
    #region Atributos
     public string $_nombre;
     public array $_arrayMascotas;
    #endregion

    #region Constructor
    public function __construct(string $nombre)
    {
        $this->_nombre = $nombre;
        $this->_arrayMascotas = array();
    }
    #endregion

    #region Metodos
    public function equals(Mascota $m, Guarderia $g) :bool
    {
        foreach($g->_arrayMascotas as $item)
        {
            if($m->equals($item))
                return true;
        }
        return false;
    }

    public function add(Mascota $m) : bool
    {
        if($this->equals($m,$this))
        {
            return false;
        }
        array_push($this->_arrayMascotas,$m);
        return true;        
    }

    public function toString() : string
    {
        $cadena = $this->_nombre . "<br>";
        $acumulador_edades = 0;
        foreach($this->_arrayMascotas as $mascota)
        {
            $cadena .= Mascota::mostrar($mascota). "<br>";
            $acumulador_edades += $mascota->edad;
        }
        if($acumulador_edades > 0){
            $promedio =  $acumulador_edades / count($this->_arrayMascotas); 
            $cadena . "<br> El promedio de edades es:" . $promedio;
        }
           
        return $cadena;
    }
    #endregion

}