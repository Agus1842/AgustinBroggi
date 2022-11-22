<?php
 

class Persona
{
    private $nombre = 'javier';
    public $apellido = 'parra';
    public $fechnac = 1980-07-22;

    public function __construct($nombre, $apellido, $fechnac)
     {
        $this-> nombre = $nombre;
        $this-> apellido = $apellido;
        $this-> fechnac = $fechnac;
     }

    public function getNombre() {
        return $this->nombre;
     }   
     public function setNombre($nombre){
        $this->nombre = $nombre;
     }

     public function fullname(){
       return " {$this ->nombre},  {$this-> apellido}";

     }
}




/*$persona = new Persona('javier','parra','1980-07-22');

echo $persona -> fullname() . '<br>';

echo $persona -> getNombre() . '<br>';

$persona -> setNombre('yari');

echo $persona -> getNombre() . '<br>';


//echo $persona -> nombre . '<br>';
echo $persona -> apellido . '<br>';
echo $persona -> fechnac . '<br>';

*/
?>