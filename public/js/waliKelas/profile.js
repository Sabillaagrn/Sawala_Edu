document.addEventListener("DOMContentLoaded", () => {
    /* ------ SIDEBAR ------ */
    document.body.classList.add("loaded");

    const collapseButton = document.querySelector("[data-resize-btn]");
    if (collapseButton) {
        collapseButton.addEventListener("click", () =>
            document.body.classList.toggle("sb-expanded")
        );
    }

    const menuToggle = document.querySelector(".menu-toggle");
    const sidebar = document.querySelector("aside");
    if (menuToggle && sidebar) {
        menuToggle.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuToggle.classList.toggle("open");
        });
    }
});
