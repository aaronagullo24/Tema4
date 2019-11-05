<html>

<head>
    <title>Pruebas</title>
</head>

<body>
    <?php
    class Menu
    {

        private $enlaces = array();
        private $titulos = array();
        private $ubicacion;

        public function __construct($ubicacion)
        {
            $this->ubicacion = $ubicacion;
        }



        public function  cargarOpcion($en, $tit)
        {
            $this->enlaces[] = $en;
            $this->titulos[] = $tit;
        }
        public function mostrar($opc)
        {
            echo "<div style='text-align:" . $this->ubicacion . ";'>";
            if ($opc == 'v') {
                $this->mostrarV();
            } else {
                $this->mostrarH();
            }
        }

        public function mostrarV()
        {
            for ($f = 0; $f < count($this->enlaces); $f++) {
                echo '<a href="' . $this->enlaces[$f] . '">' . $this->titulos[$f] . '</a>';
                echo "<br>";
            }
        }

        public function mostrarH()
        {

            for ($f = 0; $f < count($this->enlaces); $f++) {
                echo '<a href="' . $this->enlaces[$f] . '">' . $this->titulos[$f] . '</a>';
                echo "-";
            }
        }
    }
    $menu1 = new Menu('center');
    $menu1->cargarOpcion('http://www.google.com', 'Google');
    $menu1->cargarOpcion('http://www.yahoo.com', 'Yhahoo');
    $menu1->cargarOpcion('http://www.msn.com', 'MSN');
    $menu1->mostrar('v');
    echo "<br>";
    $menu1->mostrar('h');


    ?>
</body>

</html>