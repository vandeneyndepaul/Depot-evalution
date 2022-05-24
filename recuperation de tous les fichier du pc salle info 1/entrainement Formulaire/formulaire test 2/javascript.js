




document.getElementById("inscription").addEventListener("submit" , function (e){

    e.preventDefault();
    let erreur1;let erreur2;
    var mail=document.getElementById("eml");
    var prenom=document.getElementById("preno");
  





    let valeur1;let valeur2;
        if (document.getElementById('choix1').checked) {
        valeur1 = document.getElementById('choix1').value;
        }
        if(document.getElementById("choix2").checked){
        valeur2= document.getElementById("choix2").value;
    }

    console.log(valeur1,valeur2);
    if(valeur2){
        alert("vous etes une femme");
    }
    else if (valeur1){
        alert("vous etes un homme");
    }

let filtreMail = new RegExp('^[a-zA-Z0-9_.]+@[a-zA-Z]+.[a-zA-Z]{2,3}$');            //////////////////////////////////////////////////////
let resultatFILTRE = filtreMail.test(mail.value);                                        //// CREATION DU FILTRE EMAIL,PRENOM,NOM /////////////
console.log(resultatFILTRE+" : Resultat Filtre Mail ");



let FiltrePrenom = new RegExp('^[a-zA-Z]+$');
let ResultatFiltrePrenom=FiltrePrenom.test(prenom.value);
console.log(ResultatFiltrePrenom+" : Resultat Filtre Prenom");





if(!mail.value || resultatFILTRE==false ){      
    e.preventDefault();                                                        //////////////////////////////////////////////////////////////////////////////
    erreur1="Entrez un Email correct !\n";                 /// verifie si addresse mail correct, assigne une valeur a erreur sinon //////
}



if(!prenom.value || ResultatFiltrePrenom==false){
    e.preventDefault();
    erreur2="Entrez un prenom correct !\n";
}


//if(resultatFILTRE==false ||  )
// console.log(resultatFILTRE);
// console.log(ResultatFiltrePrenom);

// console.log((filtreMail));
// console.log(FiltrePrenom);

// if((FiltrePrenom==false && filtreMail==false) || (filtreMail==true && FiltrePrenom==false) || (filtreMail==false && FiltrePrenom==true)) {
    if((ResultatFiltrePrenom==false && resultatFILTRE==false) || (resultatFILTRE==true && ResultatFiltrePrenom==false) || (resultatFILTRE==false && ResultatFiltrePrenom==true)) {
    console.log("filtre non");
    e.preventDefault()
}


else  {          
                                                 ////////////////////////////////////////////////////////////////
    console.log("filtre oui ");                /////////   ENVOIE DU FORMULAIRE SI ADRESSE VALIDE /////////////
}


if (erreur1){        
    e.preventDefault();                                                     //////////////////////////////////////////////
                                                                         //// POUR AFFICHER LE MESSAGE D'ERREUR ///////
    document.getElementById("erreur1").innerHTML=erreur1;       
}


if(erreur2){        
    e.preventDefault();
   
    document.getElementById("erreur2").innerHTML=erreur2;
}



})





    // a*
    // [a-z]+
    // \w?
    // [\w\D]{2}
    // [\w\D]{2,8}
    // [0-9]{2}(-[0-9]){4} //06-01-01-01-01
