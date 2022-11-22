




function creacion1(val){

    if (val == 'stock') {
    
        document.getElementById('aux').innerHTML = ' <h2>stock:</h2>    <label for="producto"> producto: </label> <input type="text" name="producto"> <label for="stock"> stock: </label><input type="number" name="stock"><label for="precio"> precio: </label><input type="number" name="precio"> <input type="submit"> ' 
    }
    
    if (val == 'carrito') { 
        document.getElementById('aux').innerHTML = ' <h2>cantidad:</h2> <label for="cantidad"> Cantidad: </label><input type="number" name="cantidad"> <input type="submit"> '
        
    }
    
    if (val == 'selecionar') {
    
        document.getElementById('aux').innerHTML = ''
    }



}