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

//Search JS
const searchInput = document.getElementById("searchInput");
const cards = document.querySelectorAll(".grid .card");

searchInput.addEventListener("keyup", function () {
    const filter = this.value.toLowerCase();

    cards.forEach((card) => {
        const name = card.querySelector("h3").textContent.toLowerCase();
        const subject = card.querySelector("p").textContent.toLowerCase();

        if (name.includes(filter) || subject.includes(filter)) {
            card.style.display = "";
        } else {
            card.style.display = "none";
        }
    });
});

//Page
document.addEventListener("DOMContentLoaded", function () {
    const cardsPerPage = 10;
    const cards = Array.from(document.querySelectorAll(".grid .card"));
    const paginationContainer = document.getElementById("pagination-controls");
    const paginationInfo = document.getElementById("pagination-info");

    let currentPage = 1;
    let totalPages = Math.ceil(cards.length / cardsPerPage);

    function renderCards() {
        const start = (currentPage - 1) * cardsPerPage;
        const end = start + cardsPerPage;

        cards.forEach((card, index) => {
            if (index >= start && index < end) {
                card.style.display = "";
            } else {
                card.style.display = "none";
            }
        });

        // Update info text
        paginationInfo.innerHTML = `Showing <strong>${start + 1}-${Math.min(
            end,
            cards.length
        )}</strong> from <strong>${cards.length}</strong> data`;
    }

    function renderPagination() {
        paginationContainer.innerHTML = "";

        // Hide pagination controls if cuma 1 page
        if (totalPages <= 1) {
            paginationInfo.style.display = "none";
            return;
        } else {
            paginationInfo.style.display = "block";
        }

        // Left arrow
        const leftArrow = document.createElement("button");
        leftArrow.className = "pagination-arrow";
        leftArrow.innerHTML = '<i class="fa-solid fa-angle-left"></i>';
        leftArrow.disabled = currentPage === 1;
        leftArrow.addEventListener("click", () => {
            if (currentPage > 1) {
                currentPage--;
                renderCards();
                renderPagination();
            }
        });
        paginationContainer.appendChild(leftArrow);

        // Page number buttons
        for (let i = 1; i <= totalPages; i++) {
            const pageBtn = document.createElement("button");
            pageBtn.className = "pagination-btn";
            if (i === currentPage) pageBtn.classList.add("active");
            pageBtn.innerText = i;
            pageBtn.addEventListener("click", () => {
                currentPage = i;
                renderCards();
                renderPagination();
            });
            paginationContainer.appendChild(pageBtn);
        }

        // Right arrow
        const rightArrow = document.createElement("button");
        rightArrow.className = "pagination-arrow";
        rightArrow.innerHTML = '<i class="fa-solid fa-angle-right"></i>';
        rightArrow.disabled = currentPage === totalPages;
        rightArrow.addEventListener("click", () => {
            if (currentPage < totalPages) {
                currentPage++;
                renderCards();
                renderPagination();
            }
        });
        paginationContainer.appendChild(rightArrow);
    }

    renderCards();
    renderPagination();
});
