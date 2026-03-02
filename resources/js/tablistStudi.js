document.addEventListener("DOMContentLoaded", () => {

  const sections = document.querySelectorAll("#studi-lanjut");

  sections.forEach(section => {

    const tabs = section.querySelectorAll('[role="tab"]');
    const panels = section.querySelectorAll('[role="tabpanel"]');

    tabs.forEach(tab => {
      tab.addEventListener("click", () => {

        // Reset semua tab
        tabs.forEach(t => t.setAttribute("aria-selected", "false"));

        // Aktifkan tab yang diklik
        tab.setAttribute("aria-selected", "true");

        // Sembunyikan semua panel
        panels.forEach(panel => panel.classList.add("hidden"));

        // Tampilkan panel sesuai aria-controls
        const target = section.querySelector(
          `#${tab.getAttribute("aria-controls")}`
        );

        if (target) target.classList.remove("hidden");

      });
    });

  });

});
