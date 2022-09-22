<?php
namespace Animalitos;


class Mascota
{
    #region Atributos
    public string $nombre;
    public string $tipo;   
    public int $edad;   
    #endregion
    
    #region Constructor
    public function __construct(string $nombre,string $tipo, int $edad=0)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->edad = $edad;
    }
    #endregion

    #region  Metodos Instancia
    public function toString() : string
	{
		return $this->nombre . "-" . $this->tipo . "-" . $this->edad;
	}
   
    public function equals(Mascota $m) :bool
    {
        if($m != null && $this->nombre == $m->nombre && $this->tipo == $m->tipo)
            return true;
        else
            return false;
    }
    #endregion

    #region Metodos Estaticos
    public static function mostrar(Mascota $m) : string
    {
        return $m->toString();
    }
    #endregion
}

