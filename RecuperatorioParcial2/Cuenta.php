<?php

    require_once("Persona.php");

    class Cuenta{
        public $titular ;
        public $cantidad;

        public function __construct($Titular, $Cantidad)
        {
            $this-> titular = $Titular;
            $this-> cantidad = $Cantidad;
        }

        public function getTitular(){
            $this-> titular;
        }

        public function getCantidad(){
            $this-> cantidad;
        }

        public function setTitular($Titular){
            $this-> titular = $Titular;
        }

        public function setCantidad($Cantidad){
            $this-> cantidad = $Cantidad;
        }

        public function Mostrar(){
            echo "Titular:" . $this-> titular . "</br>";
            echo "Cantidad:"  . $this-> cantidad . "</br>";
        }

        public function Ingresar($Cantidad){
            if($Cantidad > 0){
                $this-> cantidad = $this->cantidad + $Cantidad;
            }
        }

        public function Retirar($Cantidad){
            $this-> cantidad = $this->cantidad - $Cantidad;
        }

    }

?>