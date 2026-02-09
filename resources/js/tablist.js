document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector("#berita-prestasi-testi");
  if (!section) return;

  const tabs = section.querySelectorAll('[role="tab"]');
  const panels = section.querySelectorAll('[role="tabpanel"]');

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.setAttribute("aria-selected", "false"));
      tab.setAttribute("aria-selected", "true");

      panels.forEach(p => p.classList.add("hidden"));

      const target = section.querySelector(
        `#${tab.getAttribute("aria-controls")}`
      );

      if (target) target.classList.remove("hidden");
    });
  });
});
