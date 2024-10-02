document.addEventListener('DOMContentLoaded', () => {
    const images = [
        'img/slidebg1.jpg',
        'img/slidebg2.jpg',
        'img/slidebg3.jpg'
    ];
    
    const imageElement = document.getElementById('backgroundImage');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let currentIndex = 0;

    function updateImage(index) {
        imageElement.style.opacity = 0; // Começa com a imagem invisível
        setTimeout(() => {
            imageElement.src = images[index];
            imageElement.style.opacity = 1; // Depois torna a imagem visível
        }, 500); // Tempo deve coincidir com o tempo da transição de opacidade
    }

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateImage(currentIndex);
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateImage(currentIndex);
    });
});
