document.addEventListener("DOMContentLoaded", function () {
    const prevButton = document.querySelector(".carousel-button.prev");
    const nextButton = document.querySelector(".carousel-button.next");
    const slides = document.querySelectorAll(".carousel-slide");

    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.style.display = "block";
            } else {
                slide.style.display = "none";
            }
        });
    }

    prevButton.addEventListener("click", function () {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    });

    nextButton.addEventListener("click", function () {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });

    // Exiba o primeiro slide ao carregar a página
    showSlide(currentIndex);
});
