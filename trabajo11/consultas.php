<?php

include 'conexion.php';
$Color = $_POST ['COL'];

$consulta = 'select * from Socios where Color = '. "'" . $Color . "'";
$resultado = mysqli_query($conexion,$consulta);
$fila = mysqli_fetch_all($resultado,MYSQLI_BOTH);




foreach ($fila as $row){
echo '<div style="width: 200px ; height: 160 px ; border: 3px solid black;  position: absolute  ;">'.
        '<div style="background-color:'.$Color.' ;">'.
         'DNI: '. $row['DNI'] . '<br>'.
         'Nombre: '. $row['Nombre'] . '<br>'.
         'Apellido: '. $row['Apellido'].'<br>'. 
         'Edad: '. $row['Edad'] . '<br>'. 
         'facturas :'.$row['Facturas'] .'<div>'. 
         '<div>' ;
}









/* echo 'apellido: '. $fila[0] . '<br>';
echo 'nombre: '. $fila[1] . '<br>';
echo 'edad: '. $fila[2] . '<br>';
echo 'facturas: '. $fila[3] . '<br>';
echo 'DNI: '. $fila[4] . '<br>';




foreach ($fila as $row){

    echo $row . '<br>';

} */





/*
$consulta = 'select * from Socios' ;
$resultado = mysqli_query($conexion,$consulta);
$DNI = $_POST ['DNI'];



foreach ($resultado as $row) {

    if ($row['DNI'] == $DNI) {
       
        echo $row['DNI'] . '<br>';
        echo $row['Nombre'] . '<br>';
        echo $row['Apellido'] . '<br>';
        echo $row['Edad'] . '<br>';
        echo $row['Facturas'] . '<br>';



    }

}


*/






?>