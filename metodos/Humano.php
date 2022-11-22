<?php

class Humano {

    public static $nombre ="yari cedres <br>";
    
    public static function saludar(){
        echo "hola mundo <br>";
    }

    public  function saludoPersonalizado (){
        echo "hola ". self::$nombre;

    } 
}


class argentino extends Humano {

public static function saludarArgentino(){

echo "hola ". parent::$nombre;
}

}

argentino:: saludarArgentino();


/* $humano = new humano();

$humano -> saludoPersonalizado();

humano::saludar();
echo Humano::$nombre ; */


?>