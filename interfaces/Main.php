
<?php
require_once('Moto.php');



class main extends moto {

   
}


$moto = new Moto();

echo $moto-> getModelo() . '<br>';

echo $moto -> getCantidadAsientos() . '<br>';

echo $moto -> getCantidadRuedas() . '<br>';
?>