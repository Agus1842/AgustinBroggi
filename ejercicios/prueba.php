<?php


$fecha= new DateTime();

print $fecha->format("Y");


$fecha1= new DateTime();

$array = $fecha1 -> setDate(1980,07,22);
print $array->format("y");

?>