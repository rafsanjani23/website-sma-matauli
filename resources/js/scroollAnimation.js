let scrollObserver = null;

function initScrollAnimations() {
    // Disconnect previous observer jika ada (untuk re-init dari bfcache)
    if (scrollObserver) {
        scrollObserver.disconnect();
        scrollObserver = null;
    }

    const elements = document.querySelectorAll('.scroll-animate');

    // Reset semua elemen ke state awal
    elements.forEach(el => {
        if (el.dataset.initialClass) {
            el.classList.remove('animate-in');
            el.className = el.dataset.initialClass;
        } else {
            el.dataset.initialClass = el.className;
        }
    });

    scrollObserver = new IntersectionObserver(entries => {
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
                // ===== KELUAR VIEWPORT — reset ke state awal =====
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

    elements.forEach(el => scrollObserver.observe(el));
}

// Init saat halaman pertama kali dimuat
document.addEventListener("DOMContentLoaded", initScrollAnimations);

// Re-init saat halaman dikembalikan dari bfcache (browser back/forward)
window.addEventListener("pageshow", (event) => {
    if (event.persisted) {
        initScrollAnimations();
    }
});
