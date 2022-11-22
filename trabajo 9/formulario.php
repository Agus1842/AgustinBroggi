
<?php

//$mundo = $_GET['nombre'];
$nombre = $_POST['nombre'] .' '. $_POST['apellido'];

$dni = $_POST['DNI'];
$fechan = $_POST ['fechan'];
$sexo = $_POST ['sex'];

$color = $_POST['color'];






foreach ($color as $color) {
  echo $color . "<br>" ;
}



//for ($i=0; $i <4 ; $i++) { 
//    if ( isset($_POST ['color' . $i ] )) {
//      echo $_POST ['color' . $i] . '<br>';  
//    }
//}


//if( isset ($_POST ['verde'] )){

//    echo $_POST ['verde'];
//}

//if( isset ($_POST ['amarillo'] )){ 

//    echo $_POST ['amarillo'] ;

//}
//if( isset ($_POST ['azul'])){ 
//    echo $_POST ['azul'];



//}
//if( isset ($_POST ['rojo'])){ 
//    echo $_POST ['rojo'];

//}







echo $nombre . '<br>';

echo $fechan . '<br>' ;

echo $sexo . '<br>';



//nombre 

//apellido

//dni

//fecha nacimiento

//sexo tiene que ser 'v' o 'm'

//colores verde,amarillo,azul,rojo


?>


    




