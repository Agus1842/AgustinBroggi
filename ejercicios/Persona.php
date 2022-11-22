<?php

require_once('Anios.php');
class Persona{
    use Anios;
    public $nombre;
    public $apellido;
    public $Dni;
    public $Fecha;
    public function __construct($nombre ,$apellido,$dni,$Fecha)
    {
        $this->nombre =$nombre;
        $this->dni =$dni;
        $this->fecha =$Fecha;
        $this->apellido =$apellido;
     }
}



?>