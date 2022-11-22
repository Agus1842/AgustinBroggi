<?php

require_once('Empleado.php');
class Repartidor extends Empleado
{
    private $zona = 'A';


    public function setZona($zona){
        $this->zona = $zona;
       }


    public function plus(){

 
    if (( $this->zona = 'A') && ( $this->getEdad() < 25 ) ) {
        

        return $this->getSalario() + $this->getPlus();


    } else {
        return $this->getSalario();
        
    }


    }


}



?>