<?php
class armas
{
    protected $nombre;
    protected $modelo;

    public function __contructor($nombre, $modelo)
    {
        $this->nombre = $nombre;
        $this->modelo = $modelo;
    }

    public function __toString()
    {
        $variable= "Nombre: " .$this->nombre ;
        $variable.= " modelo: " .$this->modelo;
        return $variable;
    }
}
