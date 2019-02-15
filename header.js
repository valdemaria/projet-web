var test = document.getElementById("menu");
test.addEventListener("mouseover", function (event) {
    // met en surbrillance la cible de mouseover
    event.target.style.color = "#FA0605";
}, false);
test.addEventListener("mouseout", function (event) {
    // enleve la surbrillance de la cible de mouseover
    event.target.style.color = "";

}, false);