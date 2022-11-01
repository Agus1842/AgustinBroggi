<?php

    require_once("Persona.php");
    require_once("Cuenta.php");

    $Persona2 = new Persona("Agustin", "28", "37564709");
    $CuentaPersona = new Cuenta("Agustin","25.000");

    echo $Persona2->Mostrar();
    echo $Persona2->esMayorEdad()  . "</br>";
    echo $CuentaPersona->Mostrar();
?>