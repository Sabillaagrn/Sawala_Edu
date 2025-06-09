document.addEventListener("DOMContentLoaded", () => {
    document.body.classList.add("loaded");

    const collapseButton = document.querySelector('[data-resize-btn]');
    if (collapseButton) {
        collapseButton.addEventListener('click', () => {
            document.body.classList.toggle('sb-expanded');
        });
    }
    
});
