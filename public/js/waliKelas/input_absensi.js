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

// Update status dropdown colors
function updateStatus(selectElement) {
    const value = selectElement.value;
    selectElement.className = `status-dropdown ${value}`;
    updateStatistics();
}

// Update statistics based on current status
function updateStatistics() {
    const statusDropdowns = document.querySelectorAll(".status-dropdown");
    const stats = { hadir: 0, sakit: 0, izin: 0, alfa: 0 };

    statusDropdowns.forEach((dropdown) => {
        stats[dropdown.value]++;
    });

    document.getElementById("hadirCount").textContent = stats.hadir;
    document.getElementById("sakitCount").textContent = stats.sakit;
    document.getElementById("izinCount").textContent = stats.izin;
    document.getElementById("alfaCount").textContent = stats.alfa;
}

// Initialize statistics
updateStatistics();

// Handle kelas selection
document.getElementById("kelasSelect").addEventListener("change", function () {
    console.log("Kelas dipilih:", this.value);
    // Di sini Anda bisa menambahkan logic untuk load data siswa berdasarkan kelas
});

// Handle tanggal selection
document.getElementById("tanggalInput").addEventListener("change", function () {
    console.log("Tanggal dipilih:", this.value);
    // Di sini Anda bisa menambahkan logic untuk load data absensi berdasarkan tanggal
});

// Pagination
document.querySelectorAll(".page-btn").forEach((btn) => {
    btn.addEventListener("click", function () {
        document
            .querySelectorAll(".page-btn")
            .forEach((b) => b.classList.remove("active"));
        if (
            !this.textContent.includes(">") &&
            !this.textContent.includes("<")
        ) {
            this.classList.add("active");
        }
    });
});