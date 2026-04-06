document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll('.scroll-animate');

    elements.forEach(el => {
        // Simpan class awal untuk reset saat keluar viewport
        el.dataset.initialClass = el.className;
    });

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const el = entry.target;
            const delay = parseInt(el.dataset.delay || '0', 10);

            if (entry.isIntersecting) {
                // ===== MASUK VIEWPORT =====
                const animate = () => {
                    el.classList.add('animate-in');
                    el.classList.remove('opacity-0');
                    el.classList.add('opacity-100');

                    el.classList.remove(
                        'translate-y-4', 'translate-y-6', 'translate-y-8', 'translate-y-10', 'translate-y-12',
                        '-translate-y-4', '-translate-y-6', '-translate-y-8', '-translate-y-10',
                        'translate-x-6', 'translate-x-8', 'translate-x-10', 'translate-x-12',
                        '-translate-x-6', '-translate-x-8', '-translate-x-10', '-translate-x-12',
                        'scale-90', 'scale-95', 'scale-75',
                        'rotate-3', '-rotate-3', 'rotate-6', '-rotate-6',
                        'blur-sm'
                    );

                    el.classList.add(
                        'translate-x-0',
                        'translate-y-0',
                        'scale-100',
                        'rotate-0'
                    );
                };

                if (delay > 0) {
                    el._animTimeout = setTimeout(animate, delay);
                } else {
                    animate();
                }

            } else {
                // ===== KELUAR VIEWPORT =====
                if (el._animTimeout) {
                    clearTimeout(el._animTimeout);
                    el._animTimeout = null;
                }
                el.classList.remove('animate-in');
                el.className = el.dataset.initialClass;
            }
        });
    }, {
        threshold: 0.15
    });

    elements.forEach(el => observer.observe(el));
});