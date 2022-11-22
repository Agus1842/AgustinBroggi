

function sumar1(){
let num1 = document.getElementById("valora").value;
let num2 = document.getElementById("valorb").value;
let resultado =Number(num1)+Number(num2);

document.getElementById("resultado").innerHTML = resultado;

if(num1>=num2){
    if(num1>num2){
        alert(num1+" es mayor");
    }
        else {
            alert("los dos numeros son iguales");
        }
}
    else{
        alert(num2+" es mayor");
    }

    
}


