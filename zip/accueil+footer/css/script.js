let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;
    const slidesPerView = 3; // Nombre d'éléments visibles en même temps

    if (index >= totalSlides / slidesPerView) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = Math.ceil(totalSlides / slidesPerView) - 1;
    } else {
        currentSlide = index;
    }

    const offset = -currentSlide * 100;
    document.querySelector('.carousel').style.transform = translateX(${offset}%);
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}