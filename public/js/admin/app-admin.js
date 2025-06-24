document.addEventListener("DOMContentLoaded", function () {
    document.body.classList.add("loaded");

    // Setelah sidebar animasi masuk
    setTimeout(() => {
        const cards = document.querySelectorAll(".card");
        cards.forEach((card, index) => {
            card.style.animation = `fadeInUp 0.6s ease forwards`;
            card.style.animationDelay = `${index * 0.1}s`;
        });
    }, 600);
});

document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const sidebar = document.querySelector("aside");

    menuToggle.addEventListener("click", function () {
        sidebar.classList.toggle("open");
        menuToggle.classList.toggle("open");
    });
});
