<?php
class personaje
{
    protected $nombre;
    protected $arma = [];

    public function __construct($nombre, $arma)
    {
        $this->nombre = $nombre;
        $this->arma = $arma;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function __toString()
    {
        $variable= $this->nombre;
        $variable.= "<br>";
        $variable.= "Armas del personaje: ";
        $variable.= "<br>";
        for ($i = 0; $i < count($this->arma); $i++) {
            $variable.= $this->arma[$i];
        }
        return $variable;
    }
}
