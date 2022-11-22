function resul() {

  
 
    fetch('https://randomuser.me/api/')
    .then(res=>res.json())
    .then( 
        res=> { 
                var datos= " no existe el usuario" 
                console.log( res.results[0].gender )
                document.getElementById("imagen").src =''
                if (res.results[0].gender == 'female' && res.results[0].dob.age >= 20 && res.results[0].dob.age <= 40   ){
                    var datos = `nombre:${ res.results[0].name.first } <br>
                                apellido:${ res.results[0].name.last } <br>
                                sexo:${ res.results[0].gender } <br>
                                edad:${ res.results[0].dob.age } <br>
                                email:${ res.results[0].email } <br>
                                latitud:${ res.results[0].location.coordinates.latitude } <br>
                                longitud:${ res.results[0].location.coordinates.longitude }  `
                    document.getElementById("dato").innerHTML = datos
                    document.getElementById("imagen").setAttribute('src',res.results[0].picture.large)
                    
                    var map = L.map('map').setView([res.results[0].location.coordinates.latitude ,res.results[0].location.coordinates.longitude ], 13);


                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>'
                      }).addTo(map);
    
                      var marker = L.marker([res.results[0].location.coordinates.latitude ,res.results[0].location.coordinates.longitude ]).addTo(map);

                }
                else {
                    document.getElementById("dato").innerHTML = datos
                }
      
                

            }
    ) 
    
      
}