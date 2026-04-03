console.log('Main JS loaded');

const images = document.querySelectorAll('.services-image img');

window.addEventListener('scroll', () => {
    images.forEach(image => {
        const container = image.closest('.services-image-container');
        const rect = container.getBoundingClientRect();

        const windowHeight = window.innerHeight;
        const distanceFromCenter = (rect.top + rect.height / 2) - (windowHeight / 2);

        const speed = 0.3;
        const offset = distanceFromCenter * speed;

        image.style.transform = `translateY(${offset}px)`;
    });
});