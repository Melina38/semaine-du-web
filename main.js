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