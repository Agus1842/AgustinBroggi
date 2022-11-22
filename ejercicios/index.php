<?php
date_default_timezone_set('America/Argentina/Salta');
require("Docente.php");
require("Alumno.php");
$nombre= $_POST ['Nombre'];
$apellido = $_POST ['Apellido'];
$dni = $_POST ['Dni'];
$Profesion = $_POST ['Profesion'];
$Nacimiento = new DateTime( $_POST ['Nacimiento'] );
$arancel = $_POST['arancel'];
$fechaAct= new DateTime( date("Y-m-d") );


print $nacimiento->time;

if ($Profesion=='alumno') {
    $Alumno= new Alumno($nombre,$apellido,$dni,$Nacimiento);
    $edad = $Alumno-> Edad($Nacimiento,$fechaAct);
    $arancel= $Alumno->Cal_Alumno($arancel,$edad,$fechaAct,$Nacimiento);
}



if ($Profesion =='docente') {
    $docente= new Docente($nombre,$apellido,$dni,$Nacimiento);
    $edad = $docente->Edad($Nacimiento,$fechaAct);
    $arancel= $docente->cal_Docente($arancel,$edad,$fechaAct,$Nacimiento);
}



echo $resultado ="<h3> Resultado </h3>
nombre: {$nombre}<br>
apellido: {$apellido}<br>
DNI: {$dni}<br>
Edad: {$edad}<br>
arancel a pagar:{$arancel}<br>";


?>