<?php

    class Persona{
        public $nombre;
        public $edad;
        public $dni;

        public function __construct($Nombre, $Edad, $DNI)
        {
            $this-> nombre = $Nombre;
            $this-> edad = $Edad;
            $this-> dni = $DNI;
        }

        public function getNombre(){
            $this-> nombre;
        }

        public function getEdad(){
            $this-> edad;
        }

        public function getDni(){
            $this-> dni;
        }

        public function setNombre($Nombre){
            $this-> nombre = $Nombre;
        }

        public function setEdad($Edad){
            $this-> edad = $Edad;
        }

        public function setDni($DNI){
            $this-> dni = $DNI;
        }

        public function Mostrar(){
            echo "nombre:". $this-> nombre . "</br>";
            echo "Edad:" . $this-> edad . "</br>";
            echo "DNI:" . $this-> dni . "</br>";
        }

        public function esMayorEdad(){
            if($this-> edad  >= 18){
                return "Es mayor de edad";
            }else{
                return "No es Mayor de Edad";
            }
        }
    }

?>