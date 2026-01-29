// ========== HERO SLIDER ==========
document.addEventListener("DOMContentLoaded", () => {
    let currentSlide = 0;
    const slides = document.querySelectorAll(".hero-slide");
    const dots = document.querySelectorAll(".dot");
    const heroSlider = document.getElementById("heroSlider");
    let autoSlideInterval;

    if (!slides.length) return;

    function showSlide(n) {
        if (n >= slides.length) currentSlide = 0;
        if (n < 0) currentSlide = slides.length - 1;

        slides.forEach(slide => slide.classList.remove("active"));
        dots.forEach(dot => dot.classList.remove("active"));

        slides[currentSlide].classList.add("active");
        dots[currentSlide]?.classList.add("active");
    }

    function changeSlide(step) {
        currentSlide += step;
        showSlide(currentSlide);
        resetAutoSlide();
    }

    function autoSlide() {
        currentSlide++;
        showSlide(currentSlide);
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        autoSlideInterval = setInterval(autoSlide, 5000);
    }

    // === Arrow buttons ===
    document.querySelectorAll("[data-slide]").forEach(btn => {
        btn.addEventListener("click", () => {
            const step = btn.dataset.slide === "next" ? 1 : -1;
            changeSlide(step);
        });
    });

    // === Dot navigation ===
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            const targetId = dot.dataset.target;
            const targetSlide = document.getElementById(targetId);

            currentSlide = index;
            showSlide(currentSlide);
            resetAutoSlide();

            targetSlide?.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        });
    });

    // Auto slide
    autoSlideInterval = setInterval(autoSlide, 5000);

    // Pause on hover
    heroSlider?.addEventListener("mouseenter", () =>
        clearInterval(autoSlideInterval)
    );
    heroSlider?.addEventListener("mouseleave", resetAutoSlide);
});
