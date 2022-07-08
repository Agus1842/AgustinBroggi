//parcial de programacion//

var libro1 ={
    id: '1',
    autor: 'Romeo y Julieta',
    titulo: '',
    stock: '7',
    valor: '400',
    editorial: 'Cantaro',
}

var libro2 ={
    id: '2',
    autor: 'Pepito',
    titulo: 'Vida de Maradona',
    stock: '5',
    valor: '100',
    editorial: 'La flor',
}

var libro3 ={
    id: '3',
    autor: 'Listorti',
    titulo: 'Cuentos de la selva',
    stock: '1',
    valor: '300',
    editorial: 'La Flor',
}

var libro4 ={
    id: '4',
    autor: 'Martin Ponzio',
    titulo: 'fantasma de cantervile',
    stock: '4',
    valor: '100',
    editorial: 'Rayuela',
}

var libro5 ={
    id: '5',
    autor: 'Francisco Ludocich',
    titulo: 'La pista',
    stock: '3',
    valor: '90',
    editorial: 'Fraymocho',
}



function buscar(){
    let libros = new Array(libro1,libro2,libro3,libro4,libro5);
    let libro = document.getElementById('ID').value;
    let datos = document.getElementById('libro');
    let desc = 0;
    let existe = false;
    libros.forEach(function(libros) {
        if(libro == libros.id){
            existe = true;
            if(libro.stock <= 5){
                datos.innerHTML = "Autor:"+libros.autor+"<br>"+"Titulo:"+libros.titulo+"<br>"+"Stock:"+libros.stock;
                datos.style.background = "#28b463";
            }
            if(libros.valor == 100){
                desc = libros.valor - libros.valor*20/100;
                datos.innerHTML = desc;
            }
            if(libros.editorial == 'La flor'){
                desc = libros.valor - libros.valor*5/100;
                datos.innerHTML = desc;
            }
        }
        if(existe == false){
            datos.innerHTML = "Libro no disponible";
        }
    })
}