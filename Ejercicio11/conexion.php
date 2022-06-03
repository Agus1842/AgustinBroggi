<?php

    $conexion = new mysqli("localhost", "root", "","mundial");

    if($conexion -> connect_errno){
        echo "error al conectar con el servidor: (".$conexion->connect_errno.")". $conexion->connect_error;
    }else{
        echo "conexion exitosa";
        $consulta = "SELECT * FROM Personas";
        $resultado = mysqli_query($conexion,$consulta);
        $fila= mysqli_fetch_row($resultado);
        bur
    }
    
?>