console.log('Hello from main.js');


var $ = jQuery.noConflict();

$('.carousel').flickity({
    // options
    cellAlign: 'center',
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    

  });


// JavaScript pour le menu burger
const burgerMenu = document.getElementById('burger-menu');
const mobileMenu = document.getElementById('mobile-menu');
const overlay = document.getElementById('overlay');
const header = document.querySelector('header');
const closeMenu = document.getElementById('close-menu'); // Récupère le bouton de fermeture

// Fonction pour ouvrir/fermer le menu
function toggleMenu() {
    mobileMenu.classList.toggle('menu-open');
    overlay.classList.toggle('visible'); // Afficher/masquer l'overlay
    header.classList.toggle('menu-open'); // Changer la couleur du header en blanc
}

// Ouvrir/fermer le menu burger
burgerMenu.addEventListener('click', toggleMenu);

// Fermer le menu si on clique en dehors
overlay.addEventListener('click', toggleMenu);

// Fermer le menu avec le bouton de fermeture
closeMenu.addEventListener('click', toggleMenu);




// Bibliography
function toggleBibliography() {
  var bibliography = document.getElementById("bibliography");
  var arrowIcon = document.getElementById("arrowIcon");

  if (bibliography.classList.contains("show")) {
      bibliography.classList.remove("show");
      arrowIcon.classList.remove("up");
      arrowIcon.classList.add("down");  // Flèche vers le bas
  } else {
      bibliography.classList.add("show");
      arrowIcon.classList.remove("down");
      arrowIcon.classList.add("up");  // Flèche vers le haut
  }
}