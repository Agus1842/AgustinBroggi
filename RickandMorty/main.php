<?php
require("conexion.php");
$id = $_POST["Num"];
$nombre = $_POST["Nom"];
$estado = $_POST["estado"];
$especie = $_POST["especie"];
$tipo = $_POST["tipo"];
$sexo = $_POST ["sexo"];
$origen = $_POST ["origen"];
$ubicacion=$_POST ["ubicacion"];
$url = $_POST["url"];
$fecha = $_POST['fecha'];
echo ' <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"> </script> ';

$consulta = " INSERT INTO personajes (Id, Nombre, Estado, Especie, tipo, sexo, origen, ubicacion,imagen,creacion) VALUES ('{$id}', '{$nombre}' ,'{$estado}' ,'{$especie}' ,'{$tipo}' ,'{$sexo}' ,'{$origen}' ,'{$ubicacion}','{$url}','{$fecha}' ); ";
$AUX = mysqli_query($conexion,"SELECT * FROM `personajes` WHERE `Id` = {$id} ");
$AUX = mysqli_fetch_array($AUX,MYSQLI_ASSOC);
if ( $AUX == NULL ) {
    if (mysqli_query($conexion,$consulta)) {

echo ' <script> 
     Swal.fire({
     
     title:"personaje guardado con exito",    
     icon:"success",
     timer: 6000,
     timerProgressBar: true        
         }) 
    </script>';
    






    } else {

        echo ' <script> 
        Swal.fire({
        icon: "error",
        title:"ERROR",
        text: "'.mysqli_error($conexion).'",
        timer: 6000,
        timerProgressBar: true        
            }) 
       </script>';
       
   


        
          echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
    }
}else {




echo ' <script> 
     Swal.fire({
     icon: "error",
     title:"personaje ya guardado",
     timer: 6000,
     timerProgressBar: true        
         }) 
    </script>';
    
}


?>