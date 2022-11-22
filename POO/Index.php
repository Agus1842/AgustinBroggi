<?php

require('repartidor.php');
require('comercial.php');

$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$edad = $_POST ['edad'];
$salario = $_POST ['salario'];
$profesion = $_POST ['profesion'];


if ($profesion == 'comercial') {
    $comercial = new comercial('yari','cedres','21','200');
    $comercial -> setNombre($nombre);
    $comercial -> setApellido($apellido);
    $comercial -> setEdad($edad);
    $comercial -> setSalario($salario);
    echo 'El comerciante: '. $comercial -> getNombre() .' '. $comercial -> getApellido()  ;

    echo ' tiene un salario de: '. $comercial -> plus();
}

if ($profesion == 'repartidor') {
    $repartidor = new Repartidor('yari','cedres','21','200');
    $repartidor -> setNombre($nombre);
    $repartidor -> setApellido($apellido);
    $repartidor -> setEdad($edad);
    $repartidor -> setSalario($salario); 

echo 'El repartidor: '. $repartidor -> getNombre() .' '. $repartidor -> getApellido()  ;

echo ' tiene un salario de: '. $repartidor -> plus();
}
























/* nos piden hacer un programa que gestionen empleado 

datos

nombre 
apellido
edad
salario
plus = 300

el sistema tiene dos tipos de empleados

repartidor y comercial

el comercial ademas de los atributos anteriores tiene uno llamado comision

el repartidor ademas de los atributos anteriores tiene uno llamado zona

las clases tendran un metodo llamado plus y en cada clase tendra una implementacion distinta
este plus aumenta el salario del empleado, requisitos:
 comercial:
si tiene mas de 30 anios
y cobra una comision de mas de 200, se aplica el plus

si es repartidor:
si tiene menos de 25  anios y reparte en la "zona A" , se aplica el plus

crean una clase ejecutable donde se creen distinos empleados y mostrar por pantalla el resultado

*/


?>



