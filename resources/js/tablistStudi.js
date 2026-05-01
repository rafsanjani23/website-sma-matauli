document.addEventListener("DOMContentLoaded", () => {

  const sections = document.querySelectorAll("#studi-lanjut");

  sections.forEach(section => {

    const tabs = section.querySelectorAll('[role="tab"]');
    const panels = section.querySelectorAll('[role="tabpanel"]');

    function activateTab(tab) {
      tabs.forEach(t => t.setAttribute("aria-selected", "false"));
      tab.setAttribute("aria-selected", "true");

      panels.forEach(panel => panel.classList.add("hidden"));
      const target = section.querySelector(
        `#${tab.getAttribute("aria-controls")}`
      );
      if (target) target.classList.remove("hidden");
    }

    // On page load: detect which tab to activate from URL hash or query string
    const pageKeyToTabId = {
      tnipolri_page:  "tab-tni",
      kedinasan_page: "tab-kedinasan",
      ptn_page:       "tab-ptn",
      pts_page:       "tab-pts",
      ptln_page:      "tab-ptln",
    };

    const hash = window.location.hash.replace("#", "");
    const params = new URLSearchParams(window.location.search);

    let initialTab = null;
    if (hash) {
      // hash like 'panel-ptn' → find tab with aria-controls="panel-ptn"
      initialTab = section.querySelector(`[aria-controls="${hash}"]`);
    }
    if (!initialTab) {
      for (const [key, tabId] of Object.entries(pageKeyToTabId)) {
        if (params.has(key)) {
          initialTab = section.querySelector(`#${tabId}`);
          if (initialTab) break;
        }
      }
    }

    if (initialTab) activateTab(initialTab);

    tabs.forEach(tab => {
      tab.addEventListener("click", () => activateTab(tab));
    });

  });

});
