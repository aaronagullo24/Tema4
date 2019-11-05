<?php
class Gato
{
    //g
    public $color;
    public $raza;
    public $sexo;
    private $nombre;


    public function __construct($nombre, $sexo)
    {
        $this->$nombre = $nombre;
        $this->$sexo = $sexo;
    }
    public function set_sexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function get_sexo()
    {
        return $this->sexo;
    }
    public function set_color($color)
    {
        $this->color = $color;
    }

    public function manchar($tipo)
    {
        if($tipo==='atigrado') $this->set_color('amarillo');
       else if($tipo==='manchado')$this-> set_color('gris');
    }
}
$gato1 = new Gato('Pepe', 'indeciso');
//$gato1->color = 'amarillo';
echo $gato1->color='pardo';
//$gato1->set_sexo('mucho');
echo $gato1->get_sexo();
