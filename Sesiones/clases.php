<?php
class Alumno
{
    private $_nombre;
    private $apellido;
    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    public function __toString()
    {
        return $this->nombre . ' ' . $this->apellido;
    }
}
class Escuela
{
    private $nombre;
    private $alumnos = array();



    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function addAlumno($alumno)
    {
        $this->alumnos[] = $alumno;
    }
    public function __toString()
    {
        $retorno = $this->nombre . '\n';

        foreach ($this->alumnos as $alumno) {
            $retorno .= $alumno . ' ';
            /* Es lo mismo que decir
 * $retorno .= $alumno->__toString() .' ';
 * solo que el objeto sabe cómo convertirse en String,
 * puesto que detecta cuando se hace una operación de suma de
cadenas
 * con el punto ".". operador concatenar vamos */
        }
        return $retorno;
    }
}
