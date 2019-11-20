<?php
class Juego
{
    private $titulo;
    private $motor;
    private $personaje;
    public function __construct($t, $m, $p)
    {
        $this->titulo = $t;
        $this->motor = $m;
        $this->personaje = $p;
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
        $this->personaje = $p;
    }
    public function getPersonaje()
    {
        return $this->personaje;
    }
    public function toString()
    {
        echo "<pre>";
        echo "\t........................................\n";
        echo "\tTitulo: " . $this->titulo . "\n";
        echo "\tMotor: " . $this->motor . "\n";
        $this->personaje->toString();
        echo "\t........................................\n";
        echo "</pre>";
        echo "<br />";
    }
}


class Personaje
{
    private $nombre;
    private $edad;
    private $bebida;
    public function __construct($n, $e, $b)
    {
        $this->nombre = $n;
        $this->edad = $e;
        $this->bebida = $b;
    }

    public function setNombre($n)
    {
        $this->nombre = $n;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setEdad($e)
    {
        $this->edad = $e;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function setBebida($b)
    {
        $this->bebida = $b;
    }
    public function getBebida()
    {
        return $this->bebida;
    }
    public function toString()
    {
        echo "\tPersonaje: \n";
        echo "\t\tNombre: " . $this->getNombre() . "\n";
        echo "\t\tEdad: " . $this->getEdad() . "\n";
        echo "\t\tBebida: " . $this->getBebida() . "\n";
    }
}
echo "@ REALIZAMOS UN CLON DEL JUEGO 'A PELO':<br/><br/>";
$guybrush = new Personaje("Guybrush Threepwood", "unkown", "Grog");
$monkey = new Juego("The Secret of Monkey Island", "SCUMM", $guybrush);
$monkey_clon = clone ($monkey);
echo "EL JUEGO ORIGINAL:<br />";
$monkey->toString();
echo "EL JUEGO CLONADO:<br />";
$monkey_clon->toString();
echo "@ MODIFICAMOS UN ATRIBUTO DEL JUEGO ORIGINAL Y UN <br/>ATRIBUTO DEL
OBJETO PERSONAJE DEL JUEGO ORIGINAL:<br/><br/>";
$monkey->setTitulo("#########CHANGED#########");
$monkey->getPersonaje()->setNombre("#########CHANGED#########");
echo "EL JUEGO ORIGINAL:<br />";
$monkey->toString();
echo "EL JUEGO CLONADO:<br />";
$monkey_clon->toString();
echo "<pre>F A I L ! ! ! ! ! ! ! ! !</pre><br/><br/>";
