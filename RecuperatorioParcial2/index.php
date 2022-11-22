<?php

    require_once("Persona.php");
    require_once("Cuenta.php");

    $Persona2 = new Persona("Agustin", "28", "37564709");
    $CuentaPersona = new Cuenta("Agustin", 30000);
    // $TitularValido = new CuentaJoven("Agustin",30000,"28","20");

    echo $Persona2->Mostrar()  . "</br>";
    echo $Persona2->esMayorEdad() . "</br>";
    echo $CuentaPersona->Mostrar();
    // echo $TitularValido->Mostrar();

?>