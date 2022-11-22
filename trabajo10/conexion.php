
<?php

$user = 'root';
$pass = '';
$bd = 'pruebas';
$server = 'localhost';
$conexion = new mysqli($server,$user,$pass,$bd);
$usu = $_POST['usu'];
$contra = $_POST['contra'];

$contrahash = password_hash($contra, PASSWORD_DEFAULT);
var_dump($contrahash);





  if ($conexion -> connect_errno){
  echo 'fallo <br>';
  }else{
      echo 'ok <br>';

     

      $consulta = 'select * from Personas where Nombre = '. "'" . $usu . "'" ;
      $resultado = mysqli_query($conexion,$consulta);
      $fila = mysqli_fetch_row($resultado);
      


if (empty($fila)) {
       echo ' usuario no existe ';
     } else{
        echo 'el usuario existe';
      }
 
      
      
 
  }


?>