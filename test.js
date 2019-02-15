var num_mois = [document.getElementById("mois_tableau1"), document.getElementById("mois_tableau2"), document.getElementById("mois_tableau3"), document.getElementById("mois_tableau4"), document.getElementById("mois_tableau5"), document.getElementById("mois_tableau6"), document.getElementById("mois_tableau7"), document.getElementById("mois_tableau8"), document.getElementById("mois_tableau9"), document.getElementById("mois_tableau10"), document.getElementById("mois_tableau11"), document.getElementById("mois_tableau12")];
var nom_mois = [document.getElementById("nom_mois1"), document.getElementById("nom_mois2"), document.getElementById("nom_mois3"), document.getElementById("nom_mois4"), document.getElementById("nom_mois5"), document.getElementById("nom_mois6"), document.getElementById("nom_mois7"), document.getElementById("nom_mois8"), document.getElementById("nom_mois9"), document.getElementById("nom_mois10"), document.getElementById("nom_mois11"), document.getElementById("nom_mois12")];
for (var i = 0; i < 12; i++) {

    num_mois[i].style.display = 'none';
    console.log(num_mois[i]);
}

function myFunction(num) {

    current = num;
    num_mois[current].style.display = '';
    nom_mois[current].style.fontWeight = "900";
    nom_mois[current].style.textDecoration = "underline";
    console.log(num);
    for (var i = 0; i < 12; i++) {
        if (i != current) {
            num_mois[i].style.display = 'none';
            nom_mois[i].style.fontWeight = "normal";
            nom_mois[i].style.textDecoration = "none";
        }
    }
}

function myFunction2() {

}


var mois = document.getElementById("nom_mois");

var date = new Date();
var current = date.getMonth();
console.log("mois de " + current);
num_mois[current].style.display = '';
nom_mois[current].style.fontWeight = "900"
nom_mois[current].style.textDecoration = "underline"

var test = document.getElementById("mois");

test.addEventListener("mouseover", function (event) {
    // met en surbrillance la cible de mouseover
    event.target.style.color = "#FA0605";
}, false);
test.addEventListener("mouseout", function (event) {
    // enleve la surbrillance de la cible de mouseover
    event.target.style.color = "";


}, false);

var querySelectorCalendarElement = document.querySelectorAll('.mois_tableau tbody>tr>td>div.jour>div.event');

var global = document.getElementById("global");
var salle = document.getElementById("salle");

function check() {
    querySelectorCalendarElement.forEach(function (elem) {


        if (global.checked == true) {
            if (elem.getAttribute("data-type") == "global") {
                elem.parentElement.parentElement.style.backgroundColor = "#FA0605";

            } else {
                elem.parentElement.parentElement.style.backgroundColor = "";
            }
        }

        if (salle.checked == true) {
            if (elem.getAttribute("data-type") == "salle") {
                elem.parentElement.parentElement.style.backgroundColor = "green";
            } else {
                elem.parentElement.parentElement.style.backgroundColor = "";
            }
        }


        elem.parentElement.onclick = function (elem) {
            $(this).find('div').fancybox({
                'transitionIn': 'elastic',
                'transitionOut': 'elastic',
                'speedIn': 600,
                'speedOut': 200,
                'overlayShow': false,
                'content': '<img src="' + $(this).find('.event').attr('data-source') + '" alt="">'
            });
        };
    });
}