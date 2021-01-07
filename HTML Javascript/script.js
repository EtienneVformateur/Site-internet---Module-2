// document.getElementById("exemple").innerHTML = "NOUVEAU TEXTE";
var element_exemple = document.getElementById("exemple");
var element_clic = document.getElementById("clic");

var f1 = function(){
    element_clic.innerHTML = "Salut !";
}
element_exemple.addEventListener('click',f1);