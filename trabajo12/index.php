<?php
require_once('Alumno.php');


$alumno = new Alumno('javier','parra','1980-07-22');

echo $alumno -> fullname() . '<br>';

?>