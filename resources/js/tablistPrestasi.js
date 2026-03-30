document.addEventListener("DOMContentLoaded", () => {

  const sections = document.querySelectorAll("#prestasi-tabs");

  sections.forEach(section => {

    const tabs = section.querySelectorAll('[role="tab"]');
    const panels = section.querySelectorAll('[role="tabpanel"]');

    tabs.forEach(tab => {
      tab.addEventListener("click", () => {

        tabs.forEach(t => t.setAttribute("aria-selected", "false"));

        tab.setAttribute("aria-selected", "true");

        panels.forEach(panel => panel.classList.add("hidden"));

        const target = section.querySelector(
          `#${tab.getAttribute("aria-controls")}`
        );

        if (target) target.classList.remove("hidden");

      });
    });

  });

});
