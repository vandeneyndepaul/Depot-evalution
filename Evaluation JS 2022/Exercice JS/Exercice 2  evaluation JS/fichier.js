
let resultat=0;
let ChampEntre=prompt("Choisir le chiffre a multiplier");

function TableMultiplication(ChampEntre) {
    for (let i = 0; i <= ChampEntre; i++) {
        resultat=ChampEntre * i;
        document.write(i+" x "+ChampEntre+" = "+resultat+"<br>");
        console.log(i+"x"+ChampEntre+"="+resultat);
    }
}

let Affichage_1=document.getElementById("Affiche").innerHTML="Table de Multiplication par "+ChampEntre;
TableMultiplication(ChampEntre);