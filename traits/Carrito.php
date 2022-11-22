<?php

trait carrito {

    public $strProducto;
    public $intCantidad;


    public function setCarrito(string $producto,int $cantidad){
      $this -> strProducto = $producto;
      $this-> intCantidad = $cantidad;

    }
}





?>