<?php

    require_once("Persona.php");

    $Persona2 = new Persona("Agustin", "28", "37564709");

    echo $Persona2->Mostrar();
    echo $Persona2->esMayorEdad();

?>