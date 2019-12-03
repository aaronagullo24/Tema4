<?php
class Juego
{
    private $titulo;
    private $motor;
    private $Arraypersonaje = [];

    public function __construct($t, $m, $p)
    {
        $this->titulo = $t;
        $this->motor = $m;
        $this->Arraypersonaje = $p;
    }
    public function setTitulo($t)
    {
        $this->titulo = $t;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setMotor($m)
    {
        $this->motor = $m;
    }
    public function getMotor()
    {
        return $this->motor;
    }
    public function setPersonaje($p)
    {
        $this->Arraypersonaje[] = $p;
    }
    public function getPersonaje($indice)
    {
        for ($i = 0; $i < count($this->Arraypersonaje); $i++) {
            if ($indice == $i) {
                return $this->Arraypersonaje[$i];
            }
        }
    }

    public function __clone()
    {
        for ($i = 0; $i < count($this->Arraypersonaje); $i++) {
            $this->Arraypersonaje[$i] = clone ($this->Arraypersonaje[$i]);
        }
    }
    public function __toString()
    {
        
        $variable= "<pre>";
        $variable.= "\t........................................\n";
        $variable.= "\tTitulo: " . $this->titulo . "\n";
        $variable.= "\tMotor: " . $this->motor . "\n";
        $variable.= "\tPersonaje: ";
        for ($i = 0; $i < count($this->Arraypersonaje); $i++) {
            $variable.= $this->Arraypersonaje[$i];
        }
        $variable.= "\t........................................\n";
        $variable.= "</pre>";
        $variable.= "<br />";

        return $variable;
       
    }
}
