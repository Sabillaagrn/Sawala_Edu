// JS khusus dashboard orang tua

document.addEventListener("DOMContentLoaded", function () {
    // Highlight active menu handled by blade
    console.log("Parent Dashboard Loaded.");

    // Bisa tambahkan behavior interaktif tambahan di sini
    const cards = document.querySelectorAll(".card");
    cards.forEach((card) => {
        card.addEventListener("mouseenter", () => {
            card.classList.add("hovered");
        });
        card.addEventListener("mouseleave", () => {
            card.classList.remove("hovered");
        });
    });
});
