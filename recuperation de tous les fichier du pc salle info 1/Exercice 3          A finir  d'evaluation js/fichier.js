var tab = ["Audrey", "Salem", "Samuel", "Stéphane"];
var TailleTableauDepart = tab.length ;
console.log("Le tableau contient "+TailleTableauDepart+ "éléments"); 
console.log(tab);
var i;
var PrenomSearch=prompt("Entrez le prenom a rechercher :");
PrenomSearch.toLowerCase();
console.log(PrenomSearch);
for(let i=0; i<tab.length;i++){
    if(PrenomSearch==tab[i]){
        console.log("CORRESPOND");
        var TailleTableauAjout=tab.push(PrenomSearch);
        console.log("Vous avez ajouté le prenom  : "+PrenomSearch);
    }
}
if(PrenomSearch!=tab[i]){
        alert("Message d'erreur, aucun prenom ne correspond !")
}

/*

*/

/*
tab.shift();
console.log(tab);
*/

