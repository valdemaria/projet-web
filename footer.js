var fb = document.getElementById("div-facebook");
var snap = document.getElementById("div-snapchat");
var tel = document.getElementById("div-tel");
var mail = document.getElementById("div-mail");
var tendaime = document.getElementById('tendaime');

tendaime.style.visibility = "hidden";









fb.addEventListener("mouseover", function (event) {
    // met en surbrillance la cible de mouseover
    event.target.style.color = "#FA0605";
}, false);
fb.addEventListener("mouseout", function (event) {
    // enleve la surbrillance de la cible de mouseover
    event.target.style.color = "";

}, false);

snap.addEventListener("mouseover", function (event) {
    // met en surbrillance la cible de mouseover
    event.target.style.color = "#FA0605";
    tendaime.style.visibility = "visible";
}, false);
snap.addEventListener("mouseout", function (event) {
    // enleve la surbrillance de la cible de mouseover
    event.target.style.color = "";
    tendaime.style.visibility = "hidden";
}, false);

tel.addEventListener("mouseover", function (event) {
    // met en surbrillance la cible de mouseover
    event.target.style.color = "#FA0605";
}, false);
tel.addEventListener("mouseout", function (event) {
    // enleve la surbrillance de la cible de mouseover
    event.target.style.color = "";

}, false);

mail.addEventListener("mouseover", function (event) {
    // met en surbrillance la cible de mouseover
    event.target.style.color = "#FA0605";
}, false);
mail.addEventListener("mouseout", function (event) {
    // enleve la surbrillance de la cible de mouseover
    event.target.style.color = "";

}, false);