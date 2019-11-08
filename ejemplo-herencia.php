<html>

<head>
    <title>Pruebas</title>
</head>

<body>
    <?php
    class persona
    {
        protected $nombre;
        protected $apellido;
        protected $edad;
        public function __construct($v1, $v2)
        {
            $this->nombre = $v1;
            $this->apellido = $v2;
        }
        public function imprimirResultado()
        {
            echo $this->nombre . '<br>';
        }
    }
    //emplead
    class empleado extends persona
    {
        protected $titulo;
        public function __construct($v1, $v2, $tit)
        {
            parent::__construct($v1, $v2);
            $this->titulo = $tit;
        }
        public function operar()
        {
            echo $this->titulo;
            echo $this->nombre . $this->apellido . ' es ';
            //$this->nombres = $this->nombre , $this->apellido;
        }
    }
    $suma = new empleado("aaron", "Agullo", 'El nombre del empleado:');
    $suma->operar();
    $suma->imprimirResultado();
    ?>
</body>

</html>