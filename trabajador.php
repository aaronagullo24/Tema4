<html>

<head>
    <title>Pruebas</title>
</head>

<body>
    <?php
    abstract class Trabajador
    {
        protected $nombre;
        protected $sueldo;
        public function __construct($nom, $sue)
        {
            $this->nombre = $nom;
            $this->sueldo = $sue;
        }
        public function retornarSueldo()
        {
            return $this->sueldo;
        }
        public function getNombre(){
            return $this->nombre;
        }
    }
    class Empleado extends Trabajador
    { }
    class Gerente extends Trabajador
    { }
    $vec[] = new Empleado('juan', 1200);
    $vec[] = new Empleado('ana', 1000);
    $vec[] = new Empleado('carlos', 1000);
    $vec[] = new Gerente('jorge', 25000);
    $vec[] = new Gerente('marcos', 800000000);
    $encontrado=false;
    $nombreGerente="";
    $sueldoGerente=0;
    $hayGerente=false;
    for ($f = 0; $f < count($vec); $f++) {
        if($vec[$f] instanceof Gerente){
            $hayGerente=true;
            if($sueldoGerente<$vec[$f]->retornarSueldo()){
                $sueldoGerente=$vec[$f]->retornarSueldo();
                $nombreGerente=$vec[$f]->getNombre();
            }
        }
    }

    if($hayGerente) echo $nombreGerente ." ".$sueldoGerente;
    else echo "no hay gerente";

   
    ?>
</body>

</html>