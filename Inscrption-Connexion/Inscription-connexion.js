// Fonction pour afficher la page souhaitée
function showPage(pageId) {
    document.querySelectorAll('.page').forEach(page => {
        page.classList.remove('active');
    });
    document.getElementById(pageId).classList.add('active');
}

// Fonction pour retourner à la page précédente
function goBack(pageId) {
    document.querySelectorAll('.page').forEach(page => {
        page.classList.remove('active');
    });
    document.getElementById(pageId).classList.add('active');
}

// Carrousel automatique
let currentImageIndex = 0;
const images = document.querySelectorAll('.carousel-image');

function showNextImage() {
    images[currentImageIndex].classList.remove('active');
    currentImageIndex = (currentImageIndex + 1) % images.length;
    images[currentImageIndex].classList.add('active');
}

setInterval(showNextImage, 3000);
function toggleMenu() {
    var menuLinks = document.getElementById("menu-links");
    menuLinks.classList.toggle("show");
}