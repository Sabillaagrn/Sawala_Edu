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

    /* ---------- CHART ---------- */
    const ctx = document.getElementById("gradeChart")?.getContext("2d");

    if (ctx && window.Chart) {
        const labels = ["Sakit", "Hadir", "Izin", "Alfa"];
        const colors = ["#F4D03F", "#F8C471", "#58D68D", "#EC7063"];
        const values = [82, 87, 85, 85];

        /* Agar legenda menampilkan satu titik‐warna per kategori,
     setiap kategori dibuat sebagai dataset terpisah
     (Chart.js men‑generate legenda per‑dataset, bukan per‑label). */
        const datasets = labels.map((l, i) => ({
            label: l,
            data: labels.map((_, j) => (i === j ? values[i] : null)), // nilai hanya pada posisinya
            backgroundColor: colors[i],
            borderRadius: 8,
            borderSkipped: false,
            /* Opsional: membuat bar menempati lebar kategori (tanpa celah) */
            categoryPercentage: 1,
            barPercentage: 0.9,
        }));

        new Chart(ctx, {
            type: "bar",
            data: { labels, datasets },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        right: 30, 
                    },
                },
                plugins: {
                    /* Legenda di bawah chart, berbentuk titik berwarna */
                    legend: {
                        display: true,
                        position: "right",
                        labels: {
                            usePointStyle: true,
                            pointStyle: "circle",
                            padding: 30,
                        },
                    },
                },
                scales: {
                    y: {
                        /* Skala dari 70‑100 sesuai permintaan */
                        min: 70,
                        max: 100,
                        ticks: { stepSize: 5 },
                        grid: { drawBorder: false },
                    },
                    x: { grid: { display: false } },
                },
            },
        });
    }

    /* ------ LOGOUT & VIEW‑MORE (opsional) ------ */
    const logoutBtn = document.querySelector(".logout-btn");
    if (logoutBtn) {
        logoutBtn.addEventListener("click", () => {
            if (confirm("Apakah Anda yakin ingin logout?"))
                window.location.href = "/logout";
        });
    }

    document
        .querySelector(".view-more-btn")
        ?.addEventListener("click", () => console.log("View more clicked"));
});
