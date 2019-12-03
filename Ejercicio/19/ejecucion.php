<?php
include "arma.php";
include "juego.php";
include "personaje.php";

$pistola1=new armas("ak-47","metralleta");
$pistola2=new armas("revolver","pistola");
$Arrayarmas=array($pistola1,$pistola2);


$persona1 = new personaje("Pepe",$Arrayarmas);
$persona2 = new personaje("Antonio",$Arrayarmas);

$Array_persona=array($persona1, $persona2);

$juego1 = new Juego("fifa","Unity", $Array_persona);

echo $juego1;

echo "Clone del juego: ";
echo "<br>";
$juego2=clone ($juego1);
echo $juego2;

echo "cambio titulo juego original: ";
$juego1 -> setTitulo("Legue of Legend");
$juego1 -> getPersonaje(1)->setNombre("NombreCambiado");

echo $juego1;
echo "<br>";
echo "El clone: ";
echo "<br>";
echo $juego2;