//parcial de programacion//

var socio1 = {
    apellido: 'Parra',
    nombre: 'Javier',
    edad: '41',
    facturas: '1',
    DNI: '28358603',
}

var socio2 = {
    apellido: 'Broggi',
    nombre: 'Agustin',
    edad: '28',
    facturas: '5',
    DNI: '37564709',
}

var socio3 = {
    apellido: 'Caceres',
    nombre: 'Agustin',
    edad: '25',
    facturas: '3',
    DNI: '38435709',
}

var socio4 = {
    apellido: 'Cedres',
    nombre: 'Yari',
    edad: '26',
    facturas: '20',
    DNI: '39310548',
}

var socio5 = {
    apellido: 'Otero',
    nombre: 'Bruno',
    edad: '24',
    facturas: '7',
    DNI: '25104621',
}


function buscar(){
    let socios = new Array(socio1, socio2, socio3, socio4, socio5);//cree un array de objetos//
    let DNI = document.getElementById('dni').value;
    let socio = document.getElementById('factura');
    let existe = false;
    const fac1 = 3;
    const fact2 = 6;
    socios.forEach(function (socios) {//Se recorre el array creado von los objetos socios//
        if(DNI == socios.DNI ){//Se pregunta si el DNI ingresado esta dentro del registro//
            existe = true;//cuando esta variable tome este valor se va ejecutar los if//
            if(socios.facturas <= fac1){
                socio.innerHTML = "Nombre:"+ socios.nombre+"<br>"+"Apellido:"+socios.apellido+"<br>"+"Facturas:"+socios.facturas;
                socio.style.background = "#117a65";
            }
            if(socios.facturas > fac1 ){
                socio.innerHTML = "Nombre:"+ socios.nombre+"<br>"+"Apellido:"+socios.apellido+"<br>"+"Facturas:"+socios.facturas;
                socio.style.background = "#f4d03f";
            }
            if(socios.facturas > fact2){
                socio.innerHTML = "Nombre:"+ socios.nombre+"<br>"+"Apellido:"+socios.apellido+"<br>"+"Facturas:"+socios.facturas;
                socio.style.background = " #e74c3c ";
            }
        }
    });
    if (existe == false) {// en el caso que el socio no exista se va a moistrar un mensaje de error//
        socio.innerHTML = 'No existe el socio';
        socio.style.background = '#e74c3c';
    }
    
}