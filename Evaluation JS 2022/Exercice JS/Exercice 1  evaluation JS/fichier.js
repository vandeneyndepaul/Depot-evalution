let centenaire=0;
let jeunes=0;
let moyens=0;
let vieux=0;

alert("Exercice 1 Calcul du nombre de jeunes, de moyens et de vieux.\n          Entrez les ages successifs des habitants :");

for(let i=0;i>=0;i++){
    let age=prompt("Entrez l'âge de l'habitant n° "+(i+1)+":");
        if( age!=null){
            console.log("la personne N° "+i+" à "+age+" ans");
            
                if(age==100 || age>100){
                    centenaire+=1;
                    alert("Le comptage s'arrete car il y a un centenaire.");
                    break;
                
                }
                if(age<20){
                    jeunes+=1;
                    console.log("Il y a un jeune de plus =)");
                }
                if(age>40){
                    vieux+=1;
                    console.log("Il y a un vieux de plus :p");
                }
                if(age>=20 && age<=40){
                    moyens+=1;
                    console.log("Il y a un moyen de plus :)");
                }
        
        }

        else{
            alert("Le comptage s'arrete car vous avez annuler.");
            break;
            }
}

alert("Il y a "+jeunes+" jeunes.\nIl y a "+moyens+" moyens.\nIl y a "+vieux+" vieux.\nEt Il y a "+centenaire+" centenaire.\n ");
