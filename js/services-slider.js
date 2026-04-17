document.addEventListener("DOMContentLoaded", () => {
    const slider = document.querySelector(".wp-block-hhc-blocks-services-cta-slider .slider-track");
    if (!slider) return;

    const prev = document.querySelector(".slider-arrow.prev");
    const next = document.querySelector(".slider-arrow.next");

    const slideWidth = () => slider.querySelector(".wp-block-column").offsetWidth;

    if (prev) {
        prev.addEventListener("click", () => {
            slider.scrollLeft -= slideWidth();
        });
    }

    if (next) {
        next.addEventListener("click", () => {
            slider.scrollLeft += slideWidth();
        });
    }
});