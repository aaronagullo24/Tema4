<?php
class persona
{
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function imprimir()
    {
        echo "El nombre del usuario es: " . $this->nombre;
        echo "La edad del usuario es: " . $this->edad;
    }
}



class empleado extends persona
{
    protected $sueldo;

    public function __construct($nombre, $edad, $sueldo)
    {
        parent::__construct($nombre, $edad); //llamamos al contructor del padre
        $this->sueldo = $sueldo;
    }

    //otr imprimir para atributos de esta clase que no comparte con el padre
    public function imprimeSueldo()
    {
        echo "El salario de este empleado es: " . $this->sueldo;
    }
}

echo "persona:";
$personaM = new persona("Manolo", 33);
echo "<br>";
$personaM->imprimir();
echo "<br>";
echo "empleado";
echo "<br>";
$empleadoP = new empleado("pepe", 20, 300000);
$empleadoP->imprimir();
echo "<br>";
$empleadoP->imprimeSueldo();
echo "<br>";
