<?php

    require_once("Cuenta.php");

    class CuentaJoven extends Cuenta{
        public $bonificacion;
        public $edad;

        public function __construct($Titular, $Cantidad, $Edad, $Bonificacion)
        {
            $this-> edad = $Edad;
            $this-> bonificacion = $Bonificacion;
            $this-> cantidad = $Cantidad;
            $this-> titular = $Titular;
        }

        public function setBonificacion($Bonificacion){
            $this-> bonificacion = $Bonificacion;
        }

        public function getBonificacion(){
            $this-> bonificacion;
        }

        public function esTitularvalido(){
            if($this-> edad > 18 && $this->edad <25){
                echo "Es titular Valido";
            }else{
                echo "No es titular valido";
            }

        }

        public function Mostrar(){
            $aux = $this->cantidad + (($this->bonificacion/50) * $this->cantidad);

            echo "titular" . $this->titular . "</br>";
            echo "bonificacion:" . $aux;
        }
    }

?>