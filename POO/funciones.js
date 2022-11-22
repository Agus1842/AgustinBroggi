var input = document.createElement("input") 
input.setAttribute('type','text') 


function creacion1 (val){
 
if (val == 'comercial') {
    
    document.getElementById('aux').innerHTML = ' <input type="text" name="comercio">comision '
} 

if (val == 'repartidor') {
    document.getElementById('aux').innerHTML = ' <input type="value" name="repartidor">zona '
    
}

if (val == 'selecionar') {

    document.getElementById('aux').innerHTML = ''
}



} 