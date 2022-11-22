function ordenar(){
let miarray= [];

miarray[4]= 1;
miarray[3]= 93 ;
miarray[2]= 34;
miarray[1]= 4 ;
miarray[0]= 99;

    miarray.sort(function(a, b){return a - b});
    miarray.forEach(element=>{  
        console.log(element)
        } );
        console.log('-----------');
    for(let i=0;i<miarray.length;i++){

        if(miarray[i]>50){
            console.log (miarray[i]);
        }

        

        
    }
    console.log('-----------');
    for(let i=0;i<miarray.length;i++){

        if(miarray[i] % 2 ==0){
            console.log (miarray[i]);
        }

        

        
    }



    
}

  

