
let x=prompt("Entrez x : \n");
let y=prompt("Entrez y : \n");
let resultat;
function produit(x,y){
     resultat=parseInt(x)*parseInt(y);
     console.log("Le produit de "+x+" x "+y+" = " +resultat);
}
produit(x,y);


let tImage1 = "papillon.jpg";
function afficheImg(tImage1){
     let image = document.createElement("img");
     image.src=tImage1;
     let block= document.getElementById("MyDiv_1");
     block.innerHTML="";
     block.appendChild(image);
}
afficheImg(tImage1);



function texte (x,y,resultat){
     
     let div = document.getElementById("MyDiv_2");
     div.innerHTML = ("Le produit de "+x+" x "+y+" = "+resultat);
     
     
}
texte(x,y, resultat);