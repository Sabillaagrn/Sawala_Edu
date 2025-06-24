document.addEventListener("DOMContentLoaded", () => {
    // 1. Definisikan dataSets dulu
    const dataSets = {
        kelas7: {
            labels: ["Semester 1", "Semester 2"],
            datasets: [
                {
                    data: [82, 88],
                    backgroundColor: ["#FFD966", "#66C97F"],
                    borderRadius: 20,
                    borderSkipped: false,
                },
            ],
        },
        "kelas7-8": {
            labels: ["Semester 1", "Semester 2", "Semester 3", "Semester 4"],
            datasets: [
                {
                    data: [82, 85, 87, 83],
                    backgroundColor: [
                        "#FFD966",
                        "#66C97F",
                        "#66C97F",
                        "#FF9C9C",
                    ],
                    borderRadius: 20,
                    borderSkipped: false,
                },
            ],
        },
        "kelas7-9": {
            labels: [
                "Semester 1",
                "Semester 2",
                "Semester 3",
                "Semester 4",
                "Semester 5",
                "Semester 6",
            ],
            datasets: [
                {
                    data: [82, 85, 87, 83, 89, 90],
                    backgroundColor: [
                        "#FFD966",
                        "#66C97F",
                        "#66C97F",
                        "#FF9C9C",
                        "#66C97F",
                        "#66C97F",
                    ],
                    borderRadius: 20,
                    borderSkipped: false,
                },
            ],
        },
    };

    // 2. Inisialisasi chart dulu dengan default key
    const defaultKey = "kelas7";
    const ctx = document.getElementById("gradeChart").getContext("2d");
    const chartConfig = {
        type: "bar",
        data: dataSets[defaultKey],
        options: {
            maintainAspectRatio: false,
            animation: { duration: 500 },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    ticks: { stepSize: 5, color: "#666" },
                    grid: {
                        drawBorder: false,
                        drawOnChartArea: true,
                        color: "rgba(0,0,0,0.05)",
                        borderDash: [5, 5],
                    },
                },
                x: {
                    grid: {
                        display: true,
                        drawBorder: false,
                        drawOnChartArea: false,
                        color: "rgba(0, 0, 0, 0.05)",
                        borderDash: [5, 5],
                    },
                    ticks: { color: "#666" },
                },
            },
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: "rgba(0,0,0,0.7)",
                    titleColor: "#fff",
                    bodyColor: "#fff",
                    cornerRadius: 4,
                    callbacks: {
                        label: (ctx) => "Nilai: " + ctx.parsed.y,
                    },
                },
            },
        },
    };
    const gradeChart = new Chart(ctx, chartConfig);

    // 3. Custom dropdown (jika Anda pakai custom dropdown)
    const wrapper = document.querySelector(".custom-select-wrapper");
    if (wrapper) {
        const trigger = wrapper.querySelector(".custom-select-trigger");
        const selectedText = wrapper.querySelector("#selectedKelas");
        const optionElements = wrapper.querySelectorAll(".custom-option");

        // Set default text sesuai defaultKey
        // Cari opsi dengan data-value = defaultKey, lalu set teksnya
        const defaultOpt = wrapper.querySelector(
            `.custom-option[data-value="${defaultKey}"]`
        );
        if (defaultOpt && selectedText) {
            selectedText.textContent = defaultOpt.textContent;
        }

        // Toggle open/close saat klik trigger
        trigger.addEventListener("click", (e) => {
            e.stopPropagation();
            wrapper.classList.toggle("open");
        });

        // Pilih opsi
        optionElements.forEach((opt) => {
            opt.addEventListener("click", () => {
                const value = opt.getAttribute("data-value");
                const label = opt.textContent;
                if (selectedText) selectedText.textContent = label;
                wrapper.classList.remove("open");

                if (dataSets[value]) {
                    gradeChart.data = dataSets[value];
                    gradeChart.update();
                }
            });
        });

        // Tutup dropdown jika klik di luar
        document.addEventListener("click", () => {
            wrapper.classList.remove("open");
        });
    }

    // 4. Native <select id="kelasSelect"> fallback (jika masih ada)
    const selectKelas = document.getElementById("kelasSelect");
    if (selectKelas) {
        // Set default select sesuai defaultKey
        selectKelas.value = defaultKey;
        selectKelas.addEventListener("change", function () {
            const key = this.value;
            if (dataSets[key]) {
                gradeChart.data = dataSets[key];
                gradeChart.update();
            }
        });
    }
});
