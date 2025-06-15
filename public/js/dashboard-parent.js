document.addEventListener("DOMContentLoaded", function () {
    console.log("Dashboard Parent JS Loaded");

    // Animasi sederhana ketika card muncul
    const cards = document.querySelectorAll(".dashboard-card");
    cards.forEach((card, i) => {
        card.style.opacity = 0;
        card.style.transform = "translateY(20px)";
        setTimeout(() => {
            card.style.transition = "all 0.6s ease";
            card.style.opacity = 1;
            card.style.transform = "translateY(0)";
        }, i * 100);
    });

    // Highlight row on hover (optional enhancement)
    const rows = document.querySelectorAll(".dashboard-table tbody tr");
    rows.forEach((row) => {
        row.addEventListener("mouseenter", () => row.classList.add("hovered"));
        row.addEventListener("mouseleave", () =>
            row.classList.remove("hovered")
        );
    });
});
