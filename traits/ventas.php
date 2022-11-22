<?php

require_once("ClassTienda.php");

   

   $cantidad =$_POST ["cantidad"];



$producto =$_POST ["producto"];

$stock =$_POST ["stock"];

$precio = $_POST ["precio"];



$objProducto = new tienda();

if ( $stock == null or $producto == null or $precio == null ) {
   echo '<h2>ingrese el stock</h2>';
   exit;
}else {
   $objProducto ->setProducto($producto,$precio,$stock);
}



if ($cantidad == null) {

   echo "<h2>ingrese cantidad</h2>";
  
   exit;
} else {


   if ($cantidad > $objProducto -> intStock) {
      echo "<h2>no tenemos suficiente stock</h2>";
   } else {
   $objProducto -> setCarrito($producto,$cantidad);
   $objProducto -> setStock($cantidad);
   
   
   echo $objProducto -> getCarrito();
   }
    echo "<br>";
    echo "<br>";
    echo "<br>";
   echo $objProducto -> getProducto();
   
}






?>