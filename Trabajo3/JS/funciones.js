//funciones con parametros//
function suma(num1,num2){
    let resultado = num1 + num2;
    console.log(resultado);
}

function sumar1(){
    
    let numero1 = document.getElementById("num1").value;
    let numero2 =  document.getElementById("num2").value;
    
    let resultado = Number(numero1) + Number(numero2);
    console.log(resultado);
}

function comparar(){
    let numero = document.getElementById("num1").value;
    let numeroi =  document.getElementById("num2").value;
    
    if(numero > numeroi) {
        alert("numero es mayor" + numero);
    }else{
        alert("numeroi es mayor" + numeroi);
    }
}