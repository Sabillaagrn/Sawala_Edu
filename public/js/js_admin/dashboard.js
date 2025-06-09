document.addEventListener("DOMContentLoaded", () => {
    /* Animasi tampilan awal */
    window.addEventListener("load", function () {
        setTimeout(() => {
            const cards = document.querySelectorAll(".card");
            cards.forEach((card, index) => {
                card.style.animation = `fadeInUp 0.6s ease forwards`;
                card.style.animationDelay = `${index * 0.1}s`;
            });
        }, 600);
    });

    /* Sidebar */
    document.body.classList.add("loaded");

    const collapseButton = document.querySelector("[data-resize-btn]");
    if (collapseButton) {
        collapseButton.addEventListener("click", () => {
            document.body.classList.toggle("sb-expanded");
        });
    }

    const menuToggle = document.querySelector(".menu-toggle");
    const sidebar = document.querySelector("aside");

    menuToggle.addEventListener("click", function () {
        sidebar.classList.toggle("open");
        menuToggle.classList.toggle("open");
    });

    /* PAGINATION */
    const table = document.querySelector(".data-table tbody");
    const rows = Array.from(table.querySelectorAll("tr"));
    const rowsPerPage = 5;
    let currentPage = 1;

    const paginationInfo = document.querySelector(".pagination-info");
    const pageButtonsContainer = document.querySelector(".page-numbers");
    const prevButton = document.querySelector(".arrow-button.prev");
    const nextButton = document.querySelector(".arrow-button.next");

    function updateTable() {
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        rows.forEach((row, index) => {
            row.style.display = index >= start && index < end ? "" : "none";
        });

        paginationInfo.textContent = `Showing ${start + 1}-${Math.min(
            end,
            rows.length
        )} from ${rows.length} data`;

        prevButton.disabled = currentPage === 1;
        nextButton.disabled =
            currentPage === Math.ceil(rows.length / rowsPerPage);
    }

    function generatePageButtons() {
        pageButtonsContainer.innerHTML = "";

        const totalPages = Math.ceil(rows.length / rowsPerPage);

        for (let i = 1; i <= totalPages; i++) {
            const button = document.createElement("button");
            button.textContent = i;
            button.classList.add("page-btn");
            if (i === currentPage) button.classList.add("active");

            button.addEventListener("click", () => {
                currentPage = i;
                updateTable();
                generatePageButtons();
            });

            pageButtonsContainer.appendChild(button);
        }
    }

    prevButton.addEventListener("click", () => {
        if (currentPage > 1) {
            currentPage--;
            updateTable();
            generatePageButtons();
        }
    });

    nextButton.addEventListener("click", () => {
        if (currentPage < Math.ceil(rows.length / rowsPerPage)) {
            currentPage++;
            updateTable();
            generatePageButtons();
        }
    });

    updateTable();
    generatePageButtons();
});
