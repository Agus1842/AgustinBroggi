//Funciones de javascript//

function hola(){//funcion para saludar//
    console.log('Hola Agustin')
}

function chau(){//funcion para despedir//
    console.log('Chau y boca campeon')
}

function color(){//funcion para cambiar color//
   document.getElementById("A1").style.color= "orange";
   document.getElementById("A1").style.color= "green";
}
//funcion para volver a los colores originales//
function volver(){
    document.getElementById("A1").style.color= "white";
    document.getElementById("A1").style.backgroundColor= "blue";
}