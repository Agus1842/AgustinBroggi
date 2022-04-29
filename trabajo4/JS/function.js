//funciones javascript y arrays//

// let vector = ['36','Agustin','True','43'];

    // console.log(vector[1] = 'pera');
    // console.log(vector.length + 'Posiciones');

    //recorriendo un array en javascript//
    //for(let i = 0; i<vector.length; i++){//
        //console.log(vector[i]);//
    //}//

    // vector.forEach( Element => {
    //     console.log(Element)
    // });

    // vector.unshift('Naranja');
    // vector.shift()

    // vector.pop();

    // console.log(vector);

    // vector.forEach(function(elemento, indice , array){//foreach con busqueda en funcion//
    //     console.log(elemento , indice);
    // });

    // vector.push(false);
    // vector.sort();

    // console.log(vector)


    // function mostrar(){//mostrar mayores de 50
    //     let vector2 =[99,4,34,93,1];
    //     vector2.sort();

    //     for(let i = 0 ; i<vector2.length; i++){
    //         if(vector2[i] > 50){
    //             console.log(vector2[i]);
    //         }    
    //     }
    // }
    

        function pares(){
            let vector3 = [99,4,34,93,1]
            vector3.sort()
    
            vector3.forEach(function(vector3) {
                if ((vector3 % 2) == 0) {
                    console.log(vector3);
                }
            })
        }
