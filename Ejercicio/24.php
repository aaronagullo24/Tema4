<?php
error_reporting(E_ALL | E_STRICT);
class Metodosestáticos
{
    private static $atributoestático = 'Soy un atributo estático';
    public static $atrestáticoPublico = 'Soy estático pero publico';
    private $atributoNoestático = 'No soy estático';
    public static function metodoestático()

    {
        echo '<br />' . self::$atributoestático . ' accedido por self::';
    }
    public static function metodoestáticoThis()
    {
        $this->metodoNoestático();

        $this->metodoNoestático();
    }

    public static function accederAtributoNoestático()
    {
        echo '<br />' . $this->atributoNoestático;
    }
    public function metodoNoestático()
    {
        echo '<br />' . self::$atributoestático;
        echo '<br />' . $this->atributoestático;
    }
}

$instancia = new Metodosestáticos();
$instancia->metodoestáticoThis();
