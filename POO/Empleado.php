<?php



class Empleado {

    private $nombre = 'yari';
    private $apellido = 'cedres';
    private $edad = 21;
    private $salario = 200;
    private $Plus = 300;

    public function __construct($nombre,$apellido,$edad,$salario)
    {
        $this->nombre = $nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
        $this->salario=$salario;
    }
    public function getApellido() {
        return $this->apellido;
     }
     public function setApellido($apellido){
      $this->apellido = $apellido;
     }
     public function getNombre() {
        return $this->nombre;
     }
     public function setNombre($nombre){
      $this->nombre = $nombre;
     }
     public function getEdad() {
        return $this->edad;
     }
     public function setEdad($edad){
      $this->edad = $edad;
     }
     public function getSalario() {
        return $this->salario;
     }
     public function setSalario($salario){
      $this->salario = $salario;
     }
     public function getPlus() {
        return $this->Plus;
     }

}


?>