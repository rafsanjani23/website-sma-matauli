document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".timeline-item");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    items.forEach(item => item.classList.remove("active"));
                    entry.target.classList.add("active");
                }
            });
        },
        {
            threshold: 0.6
        }
    );

    items.forEach(item => observer.observe(item));
});
