/*let individus={nom :"",prenom :"",age :"",};
let nom=prompt("saisissez votre nom :");
let prenom=prompt("saisissez votre prenom :");
let age=prompt("saisissez votre age :");



function afficher(individus){
    alert(nom);
    alert(prenom);
    alert(age);
}

afficher(individus);

*/

let name=prompt("Entrez votre nom");
let nickname=prompt("Entrez votre prénom");
let sexe_y=true;
let sexe_x=true;
if(sexe_y=confirm("Etes-vous un homme ?")==true){
    console.log("Votre nom est :"+name+"\nVotre prénom est :"+nickname+"\nVous etes : un homme");
}
else{

    if(sexe_x=confirm("Etes-vous une femme ?")==true){
    console.log("Votre nom est :"+name+"\nVotre prénom est :"+nickname+"\nVous etes : une femme");
    }

    else{
    alert("vous n'avez pas choisi");
    }
} 




/*

let button= document.getElementById("btn1");
button=addEventListener("click",clickbtn1)
let x;
             
function clickbtn1(){
let x=prompt(" quel est votre age ?");
if (x<18){ alert("mineur");}
else if(x>=18){ alert("majeur");
}}



switch (x) {

        case "1":
                console.log("vous avez chsoisi : HOMME");
            break;
    
    default:
        break;
}}

*/