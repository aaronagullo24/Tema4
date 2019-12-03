<?php
session_start();
include "clases.php";
$alu1 = new Alumno('Alan', 'Moore');
$alu2 = new Alumno('Neil', 'Gaiman');
$alu3 = new Alumno('Terry', 'Pratchett');
$escuela = new Escuela('Los Padres Salesianos');
$escuela->addAlumno($alu1);
$escuela->addAlumno($alu2);
$escuela->addAlumno($alu3);
echo $escuela;
echo "PRIMERA ESCUELA <BR>";
echo $escuela;
$_SESSION['escuela'] = $escuela;
?>
<form action="escuela2.php" method="POST">
    <input type="submit" name="Ingresar" value="Enviar">
</form>