<?php

trait Producto{
public $strProducto;

public $fltPrecio;

public $intStock;

public function setProducto(string $producto, float $precio, int $stock){
    $this-> strProducto=$producto;
    $this-> fltPrecio=$precio;
    $this-> intStock= $stock;
} 

public function getProducto(){

    $strInfo = " <h3>  stock  </h3> 
    <hr>
      producto:{$this->strProducto } <br>
      precio: {$this -> fltPrecio} <br>
      stock:{$this -> intStock} <br> ";

    return $strInfo;
}

public function setStock( int $cantidad){

    $this-> intStock = $this ->intStock - $cantidad;

}

}



?>