document.addEventListener("DOMContentLoaded", function () {
    // Ambil semua baris di <tbody> tabel siswa
    const rows = document.querySelectorAll(".student-table tbody tr");
    rows.forEach((row, index) => {
        // Set awal: sembunyiin baris
        row.style.opacity = "0";
        row.style.transform = "translateY(20px)";
        // animasi fadeInUp
        row.style.animation = "fadeInUp 0.5s ease forwards";
        // kasih delay stagger berdasarkan index
        row.style.animationDelay = `${index * 0.1}s`;
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const tableBody = document.querySelector(".student-table tbody");
    if (!searchInput || !tableBody) return;

    function filterTableRows() {
        const filterText = searchInput.value.trim().toLowerCase();
        const rows = Array.from(tableBody.querySelectorAll("tr"));

        rows.forEach((row) => {
            // Ambil semua teks di dalem row
            const rowText = row.textContent.trim().toLowerCase();

            if (rowText.includes(filterText)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    }

    // Event listener untuk setiap tombol di keyboard (key up) pada searchInput
    searchInput.addEventListener("keyup", filterTableRows);

    // Panggil sekali di awal, supaya jadinya ter‐filter dari state awal input (jika misalnya sudah ada teks)
    filterTableRows();
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".badge").forEach((badge) => {
        const txt = badge.textContent.trim();

        //Cek "VIII" dulu, baru "VII"
        if (txt.startsWith("VIII")) {
            badge.style.backgroundColor = "#fb923c";
        } else if (txt.startsWith("VII")) {
            badge.style.backgroundColor = "#fbbf24";
        } else if (txt.startsWith("IX")) {
            badge.style.backgroundColor = "#f43f5e";
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const rowsPerPage = 10;
    const tableBody = document.querySelector(".student-table tbody");
    const allRows = Array.from(tableBody.querySelectorAll("tr"));
    const paginationControls = document.querySelector(".pagination-controls");
    const paginationInfo = document.querySelector(".pagination-info");
    const searchInput = document.getElementById("searchInput");

    let filteredRows = allRows.slice();
    let currentPage = 1;
    let totalPages = Math.ceil(filteredRows.length / rowsPerPage);

    function renderRows() {
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        filteredRows.forEach((row, idx) => {
            row.style.display = idx >= start && idx < end ? "" : "none";
        });

        paginationInfo.innerHTML = `Showing <strong>${start + 1}-${Math.min(
            end,
            filteredRows.length
        )}</strong> from <strong>${filteredRows.length}</strong> data`;
    }

    function renderPagination() {
        paginationControls.innerHTML = "";

        if (totalPages <= 1) {
            paginationInfo.style.display = "none";
            return;
        } else {
            paginationInfo.style.display = "block";
        }

        // Arrow kiri
        const leftArrow = document.createElement("button");
        leftArrow.className = "pagination-arrow";
        leftArrow.innerHTML = '<i class="fa fa-chevron-left"></i>';
        leftArrow.disabled = currentPage === 1;
        leftArrow.addEventListener("click", () => {
            if (currentPage > 1) {
                currentPage--;
                renderRows();
                renderPagination();
            }
        });
        paginationControls.appendChild(leftArrow);

        // Nomor halaman
        for (let i = 1; i <= totalPages; i++) {
            const pageBtn = document.createElement("button");
            pageBtn.className = "pagination-btn";
            pageBtn.innerText = i;
            if (i === currentPage) pageBtn.classList.add("active");

            pageBtn.addEventListener("click", () => {
                currentPage = i;
                renderRows();
                renderPagination();
            });
            paginationControls.appendChild(pageBtn);
        }

        // Arrow kanan
        const rightArrow = document.createElement("button");
        rightArrow.className = "pagination-arrow";
        rightArrow.innerHTML = '<i class="fa fa-chevron-right"></i>';
        rightArrow.disabled = currentPage === totalPages;
        rightArrow.addEventListener("click", () => {
            if (currentPage < totalPages) {
                currentPage++;
                renderRows();
                renderPagination();
            }
        });
        paginationControls.appendChild(rightArrow);
    }

    function applySearchFilter() {
        const query = searchInput.value.trim().toLowerCase();

        filteredRows = allRows.filter((row) => {
            const nameCell =
                row
                    .querySelector(".cell-nama span")
                    ?.textContent.toLowerCase() || "";
            const nisnCell =
                row
                    .querySelector("td:nth-child(3)")
                    ?.textContent.toLowerCase() || "";
            return nameCell.includes(query) || nisnCell.includes(query);
        });

        currentPage = 1;
        totalPages = Math.ceil(filteredRows.length / rowsPerPage);
        renderRows();
        renderPagination();
    }

    // Event: search
    searchInput.addEventListener("keyup", applySearchFilter);

    // Inisialisasi pertama
    renderRows();
    renderPagination();
});
