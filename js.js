const slider = document.querySelector(".slider");
let count = 0;

function nextSlide() {
    count++;
    if (count >= slider.children.length) {
        count = 0;
    }
    updateSlider();
}

function prevSlide() {
    count--;
    if (count < 0) {
        count = slider.children.length - 1;
    }
    updateSlider();
}

function updateSlider() {
    slider.style.transform = `translateX(-${count * 100}%)`;
}

// Intervalo de tiempo para cambiar de imagen automáticamente (opcional)
const interval = setInterval(nextSlide, 5000); // Cambiar cada 5 segundos

