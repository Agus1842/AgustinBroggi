
var ID = null;

function RickandMorty() {
  var datos

  ID = document.getElementById("ID_API").value


  if (ID>826 || ID<1 ) {

    document.getElementById("1").style.color = 'red'
   
    datos = 'ingrese un valor entre 1 y 826';
    
    document.getElementById("1").innerHTML = datos;

    
    
    return
    
  }

  document.getElementById("consultaBD").setAttribute("hidden",'');
  document.getElementById("esconder").setAttribute("hidden",'');
  document.getElementById("guardar").removeAttribute("hidden");

  var formulario = document.getElementById('form')
     

  formulario.addEventListener("click",prueba)

  
  


  async function llega() {

    const respuesta = await fetch("https://rickandmortyapi.com/api/character/"+ID)
    
    const info = await respuesta.json()


    
    
    
    datos = ` <p style="text-align:center">
    ID:${info.id} <br>
    nombre:${info.name} <br>
    estado:${info.status} <br>
    especie:${info.species} <br>
    tipo:${info.type} <br>
    sexo:${info.gender} <br>
    origen:${info.origin.name} <br>
    ubicacion:${info.location.name}<br> 
     foto:</p>`;

     document.getElementById("1").style.color = 'black';

     document.getElementById("1").innerHTML = datos;

     document.getElementById("imagen").src = info.image;


    }
  
  llega()


  

  async function prueba(event) {

    event.preventDefault()

 

    const respuesta = await fetch("https://rickandmortyapi.com/api/character/"+ID)
    
    const info = await respuesta.json()


    console.log(info);
    
    
    document.getElementById('url').value = info.image;
    document.getElementById('Num').value = info.id;
    document.getElementById('Nom').value = info.name;
    document.getElementById('estado').value = info.status;
    document.getElementById('especie').value = info.species;
    document.getElementById('tipo').value = info.type;
    document.getElementById('sexo').value = info.gender;
    document.getElementById('origen').value = info.origin.name;
    document.getElementById('ubicacion').value = info.location.name;
    document.getElementById('fecha').value = info.created;
    
    formulario.submit()

    

    
    }



  





  
  
  
  
  
  
  
  /*  fetch("https://rickandmortyapi.com/api/character/"+ID)
    .then((res)=>res.json())
    .then((res)=>{


      datos = ` <p style="text-align:center">
      ID:${res.id} <br>
      nombre:${res.name} <br>
      estado:${res.status} <br>
      especie:${res.species} <br>
      tipo:${res.type} <br>
      sexo:${res.gender} <br>
      origen:${res.origin.name} <br>
      ubicacion:${res.location.name}<br> 
       foto:</p>`;



       document.getElementById("1").style.color = 'black';

       document.getElementById("1").innerHTML = datos;

       document.getElementById("imagen").src = res.image;


       function funcion(){

      document.getElementById('url').value = res.image;
      document.getElementById('Num').value = res.id;
      document.getElementById('Nom').value = res.name;
      document.getElementById('estado').value = res.status;
      document.getElementById('especie').value = res.species;
      document.getElementById('tipo').value = res.type;
      document.getElementById('sexo').value = res.gender;
      document.getElementById('origen').value = res.origin.name;
      document.getElementById('ubicacion').value = res.location.name;
     
      document.getElementById('fecha').value = res.created;


      


       



      }

     var formulario = document.getElementById('form')
     

     formulario.addEventListener("submit",funcion)

    


      
     } ) */
  }
      

