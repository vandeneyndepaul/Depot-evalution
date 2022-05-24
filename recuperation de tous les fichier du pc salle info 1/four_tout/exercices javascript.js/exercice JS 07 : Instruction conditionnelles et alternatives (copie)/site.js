
/*-------------------------------------------------*/
/*------- EXERCICE 1 : PARITE ---------------------*/
/*-------------------------------------------------*/

let nombre=prompt("Entrez votre nombre :");

//(nombre%2==0) ? console.log("nombre paire"):console.log("nombre impaire");

function paire_impaire(nombre) {
    if (nombre%2==0) {
        console.log("nombre paire");        
    }
    else{
        console.log("nombre impaire");
    }
    
}

paire_impaire(nombre);

/*-------------------------------------------------*/
/*--------   EXERCICE 2 : AGE ---------------------*/
/*-------------------------------------------------*/

let age=prompt("Entrez votre age : ");

(age>=18) ? console.log("Individus : \n Majeur"): console.log("Individus : \n Mineur");



/*-------------------------------------------------*/
/*--------   EXERCICE 3 : Calculette --------------*/
/*-------------------------------------------------*/



    let nombre1=prompt("Entrez votre premier nombre :");
    let nombre2=prompt("Entrez votre second nombre :");
    let x="";
    


    function calculette(nombre1,nombre2,x) {

 
    
    console.log("First number : "+nombre1+"\nSecond number: "+nombre2);
    x=prompt("Que voulez vous faire ?\n\n Tapez : + pour additionner\n Tapez : - pour soustraire\n Tapez : * pour multiplier\n Tapez : / pour diviser");


    
    switch (x) {
        case "+": 
            console.log("vous avez choisi d'additionner :\n"+nombre1+" et "+nombre2+"\n Voici le resultat : ");
            nombre1=parseInt(nombre1)+parseInt(nombre2);
            console.log(nombre1);
            break;
        case "-" :
            console.log("vous avez choisi de soustraire :\n"+nombre1+" et "+nombre2+"\n Voici le resultat : ");
            nombre1=parseInt(nombre1)-parseInt(nombre2);
            console.log(nombre1);
            break;
        
        case "*" :
            console.log("vous avez choisi de multiplier :\n"+nombre1+" et "+nombre2+"\n Voici le resultat : ");
            nombre1=parseInt(nombre1)*parseInt(nombre2);
            console.log(nombre1);
            break;    
        
        case "/" :
            console.log("vous avez choisi de diviser :\n"+nombre1+" et "+nombre2+"\n Voici le resultat : ");
            nombre1=parseInt(nombre1)/parseInt(nombre2);
            console.log(nombre1);
            break;

        default:
            console.log("ERREUR \n Vueillez recommencer");
            calculette(nombre1,nombre2,x);
            
            break;
    }    
}
calculette(nombre1,nombre2,x);
