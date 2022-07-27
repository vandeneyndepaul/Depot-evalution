

////////////////////////////////////////////////////////////////
/////////////  EXERCICE  1  ////////////////////////////////////
////////////////////////////////////////////////////////////////


/*

let MyTableau = new Array ();
let taille = prompt("Entrez la taille du tableau : \n");
let i;
for ( let i=0 ; i<taille ; i++){
    MyTableau [i] = prompt("Entrez votre nom :\n");
    if(MyTableau[i]==null){
        console.log("Erreur");
        break;
    }
}
for ( let i=0 ; i<taille ; i++){
console.log(MyTableau [i]);
}



*/


////////////////////////////////////////////////////////////////
/////////////  EXERCICE  2  ////////////////////////////////////
////////////////////////////////////////////////////////////////



let taille = prompt ("Entrez la taille du tableau que vous voulez : \n");
let MyTableau= new Array (taille);
let moyenne=0;
let i=0;
for(let i=0; i<taille ; i++){
    MyTableau[i]= prompt("Entrez la case : N°"+(i+1)+" \n");
;}

menu(MyTableau,taille);

function menu (MyTableau,taille) {
    

    let x = prompt("Faites votre choix : \n \n Entrez 1 pour : afficher le contenu de ts les postes du tableu\n Entrez 2 pour : afficher une case saisie au clavier \n Entrez 3 pour : afficher le maximum et la moyenne.\n");


    switch (x) {
        case "1" :
            //console.log(" 1 er choix ");
                affichage_contenu_tslesPostes(MyTableau);
                break;
        case "2" :
            //console.log(" 2 eme choix ");
                console.log("Il y a : "+ taille + "  case dans le Tableau \n");
                affichage_contenu_PosteIndexInput(MyTableau,x);
                
                break;
        case  "3" :
            //console.log(" 3eme choix ");
                affichage_Maximum_Moyenne(MyTableau,taille,moyenne);
                break;
        
        case x = null :
            console.log("Au revoir");
            break
    
        default:
            console.log("Entrez de nouveau") ;
            break;
}
}




function affichage_contenu_tslesPostes(MyTableau){
    console.log(MyTableau);
    };





function affichage_contenu_PosteIndexInput(MyTableau,i,x){
    i = prompt("Entre la case que vous souhaitez consulter : ");
    console.log(" Case N° "+i+ "  du tableau de : "+taille+" IL y a : "+MyTableau[i]);

};
 


function affichage_Maximum_Moyenne (MyTableau,taille,moyenne)  {
    console.log("taille  : "+taille);
     
    let o=0;let superieur;
    for(let a =0; a<taille ; a++){
        o=o+parseInt(MyTableau[a]);
        if ((MyTableau[a]<MyTableau[a+1]) && (MyTableau[a+1]<MyTableau[a+2])){
            superieur=MyTableau[a+1];
        }
        else{
            superieur=MyTableau[a];
        }
         
         
    }console.log("\nLa moyenne du Tableau est :  "+( parseInt(o)/taille));
    console.log(" le plus grand est : "+superieur);
};