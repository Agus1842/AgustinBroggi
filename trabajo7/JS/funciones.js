//JSON javascript//

let SuperHeroe = {
    "squadName": "Super hero squad",
    "homeTown": "Metro City",
    "formed": 2016,
    "secretBase": "Super tower",
    "active": true,
    "members": [
      {
        "name": "Capitan America",
        "age": 29,
        "secretIdentity": "Dan Jukes",
        "powers": [
          "Radiation resistance",
          "Turning tiny",
          "Radiation blast"
        ]
      },
      {
        "name": "Ironman",
        "age": 39,
        "secretIdentity": "Jane Wilson",
        "powers": [
          "Million tonne punch",
          "Damage resistance",
          "Superhuman reflexes"
        ]
      },
      {
        "name": "Sub Cero",
        "age": 1000000,
        "secretIdentity": "Unknown",
        "powers": [
          "Immortality",
          "Heat Immunity",
          "Inferno",
          "Teleportation",
          "Interdimensional travel"
        ]
      }
    ]
  }

function buscar(){
    for (const key in SuperHeroe.members) {
        const element = SuperHeroe.members[key]
        console.log(element)
    }
}

function mostrar(){

    SuperHeroe.members.forEach(element => {
        if(element.age > 100){
            document.getElementById('nombre').innerText = element.name
        }
    })

}

function reset(){
    
}