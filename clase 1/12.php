<?php
/*
Aplicación Nº 12 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.
*/

#region Clase 'Lapicera'
class Lapicera
{
    #region Atributos
    public $_marca;
    public $_color;
    public $_trazo;
    public $_precio;
    #endregion

    #region Constructor
    public function __construct($marca,$color,$trazo,$precio){
        $this->_marca = $marca;
        $this->_color = $color;
        $this->_trazo = $trazo;
        $this->_precio = $precio;
    }
    #endregion

    #region Metodos
    public function toString()
    {
        return "{$this->_marca} - {$this->_color} - {$this->_trazo } - {$this->_precio}";
    }
    #endregion
}
#endregion

// Creo 2 objetos de tipo Lapicera
$lap_1 = new Lapicera("Bic","rojo","gordo",150);
$lap_2 = new Lapicera("Parker","bordo","gordo",300);

// Genero un HashMap 
$arrayLapiceras = array(
    "primero" => $lap_1,
    "segundo" => new Lapicera("Saraza","blanco","fino",200),
    "tercero" => $lap_2
);

// Imprimo el array asociativo(hashmap, diccionario)
foreach($arrayLapiceras as $key=>$value)
{
    echo "Key: $key || Value: {$value->toString()} <hr><br>";
}

