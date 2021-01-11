// document.getElementById("exemple").innerHTML = "NOUVEAU TEXTE";
var element_btn_ajouter = document.getElementById("btn_ajouter");
var element_cpt = document.getElementById("cpt");
var cpt = 0;
element_cpt.innerHTML = cpt;
var f1 = function(){
    cpt++;
    element_cpt.innerHTML = cpt;
}
element_btn_ajouter.addEventListener('click',f1);