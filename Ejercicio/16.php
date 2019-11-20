<?php

abstract class trabajador
{
    protected $nombre;
    protected $sueldo;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public abstract function calcularSueldo();

    public function imprimir()
    {
        echo "El nombre del trabajador es: " . $this->nombre;
        echo " El sueldo del trabajador es :" . $this->sueldo;
    }
}

class empleado extends trabajador
{
    protected $horasTrabjadas;
    protected $valorHoras;

    public function __construct($nombre, $horasTrabjadas, $valorHoras)
    {
        $this->nombre = $nombre;
        $this->horasTrabjadas = $horasTrabjadas;
        $this->valorHoras = $valorHoras;
    }

    public function calcularSueldo()
    {
        $this->sueldo = $this->valorHoras * $this->horasTrabjadas;
    }
}

class gerente extends trabajador
{
    protected $comision;

    public function __construct($nombre, $comision)
    {
        parent::__construct($nombre);
        $this->comision = $comision;
    }

    public function calcularSueldo()
    {
        $this->sueldo = $this->comision * 0.10;
    }
}

echo "Empleado";
echo "<br>";
$empleadoM = new empleado("Manolo", 40, 35);
$empleadoM->calcularSueldo();

$empleadoM->imprimir();

echo "<br>";
echo "Gerente";
echo "<br>";
$gerenteP = new gerente("pepe", 10000);
$gerenteP->calcularSueldo();

$gerenteP->imprimir();
