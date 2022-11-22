<?php


$user = 'root';
$pass = '';
$bd = 'socios';
$server = 'localhost';
$conexion = new mysqli($server,$user,$pass,$bd);




if ($conexion -> connect_errno){
    echo 'fallo <br>';
    }else{
        echo 'ok <br>';
    }  
?>