<?php
require_once('Empleado.php');

class comercial extends Empleado
{
    private $comision = 250;

    public function setZona($comision){
        $this->comision = $comision;
       }


    public function plus(){

    if ( ( $this->getEdad() > 30 ) && ( $this->comision > 200 )  ) {

        return $this->getSalario() + $this->getPlus();
        
    } else {
        return $this->getSalario();
        
    }

    }

}





?>