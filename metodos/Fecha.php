<?php

class date_F {

    public static function getFecha(){
     
        $anio = date('Y');

        $mes = date ('m');
        $dia = date('d');

        return $dia."/".$mes."/".$anio;
    }

  


}

echo date_F::getFecha();

?>