

let image_index= "index.jpg";

let image=document.createElement("img");
image.src=image_index;
let block=document.getElementById("div_1");
block.innerHTML="";
block.appendChild(image);


document.getElementById("inscription").addEventListener("submit", function(){
   
    alert("formulaire nevoyer !");
});