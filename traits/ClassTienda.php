<?php


require_once("carrito.php");
require_once("producto.php");


class Tienda {
  use Producto,carrito;

  public $fltTotal= 0;

  public function getCarrito(){
   $this-> fltTotal = $this-> fltPrecio * $this->intCantidad;
$infoCarrito= "<h2> carrito </h2>
               <hr>
               producto: {$this->strProducto}<br>
               cantidad: {$this->intCantidad}<br>
               precio: $ {$this -> fltPrecio}<br>
               total: $ {$this->fltTotal}<br>
";

return $infoCarrito;

  }

}

?>