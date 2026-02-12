document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll('.scroll-animate');

    elements.forEach(el => {
        // Simpan class awal
        el.dataset.initialClass = el.className;
    });

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const el = entry.target;

            if (entry.isIntersecting) {
                // ===== MASUK VIEWPORT =====
                el.classList.remove('opacity-0');
                el.classList.add('opacity-100');

                el.classList.remove(
                    'translate-y-10',
                    '-translate-y-10',
                    'translate-x-10',
                    '-translate-x-10',
                    'scale-90'
                );

                el.classList.add(
                    'translate-x-0',
                    'translate-y-0',
                    'scale-100'
                );

            } else {
                // ===== KELUAR VIEWPORT =====
                // Reset persis seperti awal
                el.className = el.dataset.initialClass;
            }
        });
    }, {
        threshold: 0.2
    });

    elements.forEach(el => observer.observe(el));
});
