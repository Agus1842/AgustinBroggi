<?php
require("conexion.php");

$id=$_POST["ID_BD"];

$consulta="SELECT * FROM `personajes` WHERE `Id` = {$id} ";

$Date = date_create("Y-m-d");


if(mysqli_query($conexion,$consulta)){
    $AUX= mysqli_query($conexion,$consulta);
    $AUX = mysqli_fetch_row($AUX);
 
    if ($AUX==NULL) {
        

        echo 'persona no encontrada';



        
    } else{


      $Edad = date_diff( $Date, date_create($AUX[9]) );

        echo "Nombre: ".  $AUX[1].'<br>';
        echo "Estado: ".  $AUX[2].'<br>';
        echo "Especie: ".  $AUX[3].'<br>';
        echo "Tipo: ".  $AUX[4].'<br>';
        echo "sexo: ".  $AUX[5].'<br>';
        echo "origen: ".  $AUX[6].'<br>';
        echo "ubicacion: ".  $AUX[7].'<br>';
        echo "Edad: ".  $Edad->format("%Y") .'<br>';
        echo '<img src="'.$AUX[8].'">';


    }



}else{

    echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);

}





?>