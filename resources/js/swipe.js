document.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('heroSlider');
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.dot');

    let current = 0;
    let startX = 0;
    let isDragging = false;

    function showSlide(index) {
        slides.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('active'));

        slides[index].classList.add('active');
        dots[index].classList.add('active');
        current = index;
    }

    function next() {
        showSlide((current + 1) % slides.length);
    }

    function prev() {
        showSlide((current - 1 + slides.length) % slides.length);
    }

    /* ===== DESKTOP DRAG ===== */
    slider.addEventListener('mousedown', e => {
        isDragging = true;
        startX = e.clientX;
        slider.classList.add('cursor-grabbing');
    });

    slider.addEventListener('mouseup', e => {
        if (!isDragging) return;
        isDragging = false;
        slider.classList.remove('cursor-grabbing');

        const diff = e.clientX - startX;
        if (diff > 80) prev();
        if (diff < -80) next();
    });

    slider.addEventListener('mouseleave', () => {
        isDragging = false;
        slider.classList.remove('cursor-grabbing');
    });

    /* ===== MOBILE SWIPE ===== */
    slider.addEventListener('touchstart', e => {
        startX = e.touches[0].clientX;
    });

    slider.addEventListener('touchend', e => {
        const endX = e.changedTouches[0].clientX;
        const diff = endX - startX;

        if (diff > 60) prev();
        if (diff < -60) next();
    });
});
