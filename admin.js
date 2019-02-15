var choix = [document.getElementById('form1'), document.getElementById('form2')];
var valide = [1, 1];
var current = 0;
var lien1 = document.getElementById('lien1');
var lien2 = document.getElementById('lien2');
for (var i = 0; i < choix.length; i++) {
    choix[i].style.display = 'none';
    console.log(choix[i])
}





function myFunction2(num) {
    if (valide[num - 1] == '0') {
        choix[num - 1].style.display = 'none';
        valide[num - 1] = 1;
    } else {
        choix[num - 1].style.display = '';
        valide[num - 1] = 0;
    }



}

lien1.addEventListener("mouseover", function (event) {
    // met en surbrillance la cible de mouseover
    event.target.style.color = "#FA0605";
}, false);
lien1.addEventListener("mouseout", function (event) {
    // enleve la surbrillance de la cible de mouseover
    event.target.style.color = "";

}, false);
lien2.addEventListener("mouseover", function (event) {
    // met en surbrillance la cible de mouseover
    event.target.style.color = "#FA0605";
}, false);
lien2.addEventListener("mouseout", function (event) {
    // enleve la surbrillance de la cible de mouseover
    event.target.style.color = "";

}, false);