let miarray=[]



const persona1 ={
    nombre: 'jose',
    apellido:'robles',
    edad: 33,
    sexo:'M',
    mostrar_nombre:function(){

        return this.apellido +" , "+this.nombre


    }
}
const persona2 ={
    nombre: 'maria',
    apellido:'sanches',
    edad: 12,
    sexo:'F',
    mostrar_nombre:function(){
        return this.apellido +" , "+this.nombre

    }
}
const persona3 ={
    nombre: 'ana',
    apellido:'gonzales',
    edad: 94,
    sexo:'M',
    mostrar_nombre:function(){
        return this.apellido +" , "+this.nombre

    }
}



const mostrar_persona={
   persona1,
   persona2,
   persona3,
   mostrar_nombre:function(){
        if(persona1.edad>18){
            miarray.push(persona1.mostrar_nombre())
        }

        if(persona2.edad>18){
            miarray.push(persona2.mostrar_nombre())
        }
        
        if(persona3.edad>18){
            miarray.push(persona3.mostrar_nombre())
        }
        return miarray
   }
   
}
mostrar_persona.mostrar_nombre()
miarray.forEach(element=>{  
    console.log(element)
    } );





