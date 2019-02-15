var n;
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}
console.log("value=" + slideIndex);

function showSlides(n) {

    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";

    dots[slideIndex - 1].className += " active";
}
setInterval(function () {

    showSlides(slideIndex += 1)

    console.log("value=" + slideIndex);
    if (slideIndex >= 3) {
        slideIndex = 0;
        console.log("raz");
    }
    n = 0;
}, 5000);