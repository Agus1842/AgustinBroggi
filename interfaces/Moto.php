<?php

require_once('vehiculo.php');

class Moto implements vehiculo
{

    public function getCantidadRuedas()
    {
        return 2 ;
    }

    public function getCantidadAsientos()
    {
        return 1 ;
    } 

public function getModelo(){
    return 'yamaha 1500';
}

}

?>