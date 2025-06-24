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

// Set default date to today
document.getElementById("tanggal").valueAsDate = new Date();

// Form validation
document
    .getElementById("inputNilaiForm")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        const nilai = document.getElementById("inputNilai").value;
        const mataPelajaran = document.getElementById("mataPelajaran").value;
        const jenisPenilaian = document.getElementById("jenisPenilaian").value;
        const nisSiswa = document.getElementById("nisSiswa").value;
        const tanggal = document.getElementById("tanggal").value;

        // Validation
        if (!nisSiswa.trim()) {
            alert("NIS/Nama Siswa harus diisi!");
            return;
        }

        if (!mataPelajaran) {
            alert("Mata Pelajaran harus dipilih!");
            return;
        }

        if (!jenisPenilaian) {
            alert("Jenis Penilaian harus dipilih!");
            return;
        }

        if (!nilai || nilai < 0 || nilai > 100) {
            alert("Nilai harus antara 0-100!");
            return;
        }

        if (!tanggal) {
            alert("Tanggal harus diisi!");
            return;
        }

        // If validation passes, show success message
        alert("Data berhasil disimpan!");

        // Here you would typically send the data to Laravel backend
        // Example:
        // fetch('/input-nilai', {
        //     method: 'POST',
        //     headers: {
        //         'Content-Type': 'application/json',
        //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        //     },
        //     body: JSON.stringify({
        //         nis_siswa: nisSiswa,
        //         mata_pelajaran: mataPelajaran,
        //         jenis_penilaian: jenisPenilaian,
        //         nilai: nilai,
        //         tanggal: tanggal
        //     })
        // });
    });

// Tab switching functionality
document.querySelectorAll(".tab").forEach((tab) => {
    tab.addEventListener("click", function () {
        const tabType = this.getAttribute("data-tab");

        // Update tab appearance
        document
            .querySelectorAll(".tab")
            .forEach((t) => t.classList.remove("active"));
        this.classList.add("active");

        // Show/hide content
        document.getElementById("inputTab").style.display =
            tabType === "input" ? "block" : "none";
        document.getElementById("detailTab").style.display =
            tabType === "detail" ? "block" : "none";
    });
});

// Pagination functionality
document.querySelectorAll(".pagination-btn:not(.nav)").forEach((btn) => {
    btn.addEventListener("click", function () {
        document
            .querySelectorAll(".pagination-btn:not(.nav)")
            .forEach((b) => b.classList.remove("active"));
        this.classList.add("active");
    });
});

// Sample data for demonstration
let studentData = [];

// Form submission - add to table
document
    .getElementById("inputNilaiForm")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        const nilai = document.getElementById("inputNilai").value;
        const mataPelajaran = document.getElementById("mataPelajaran");
        const jenisPenilaian = document.getElementById("jenisPenilaian");
        const nisSiswa = document.getElementById("nisSiswa").value;
        const tanggal = document.getElementById("tanggal").value;

        // Validation
        if (!nisSiswa.trim()) {
            alert("NIS/Nama Siswa harus diisi!");
            return;
        }

        if (!mataPelajaran.value) {
            alert("Mata Pelajaran harus dipilih!");
            return;
        }

        if (!jenisPenilaian.value) {
            alert("Jenis Penilaian harus dipilih!");
            return;
        }

        if (!nilai || nilai < 0 || nilai > 100) {
            alert("Nilai harus antara 0-100!");
            return;
        }

        if (!tanggal) {
            alert("Tanggal harus diisi!");
            return;
        }

        // Add to student data
        const newData = {
            nama: nisSiswa,
            nis: Math.floor(Math.random() * 1000000000), // Generate random NIS
            tanggal: formatDate(tanggal),
            mapel: mataPelajaran.options[mataPelajaran.selectedIndex].text,
            nilai: nilai,
            jenis: jenisPenilaian.options[jenisPenilaian.selectedIndex].text,
            status: "Done",
        };

        studentData.push(newData);
        updateTable();

        alert("Data berhasil disimpan!");
        this.reset();
        document.getElementById("tanggal").valueAsDate = new Date();
    });

// Format date to DD/MM/YYYY
function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString("id-ID");
}

// Update table with new data
function updateTable() {
    const tbody = document.getElementById("detailTableBody");
    const defaultRows = tbody.innerHTML; // Keep default rows

    studentData.forEach((data) => {
        const row = document.createElement("tr");
        row.innerHTML = `
                    <td><strong>${data.nama}</strong></td>
                    <td>${data.nis}</td>
                    <td>${data.tanggal}</td>
                    <td><span class="subject-badge">${data.mapel}</span></td>
                    <td><span class="score-badge">${data.nilai}</span></td>
                    <td><span class="assessment-badge">${data.jenis}</span></td>
                    <td><span class="status-badge status-done">${data.status}</span></td>
                `;
        tbody.appendChild(row);
    });
}

// Number input validation
document.getElementById("inputNilai").addEventListener("input", function (e) {
    let value = parseInt(e.target.value);
    if (value > 100) {
        e.target.value = 100;
    } else if (value < 0) {
        e.target.value = 0;
    }
});

// Menu item click handlers
document.querySelectorAll(".menu-item").forEach((item) => {
    item.addEventListener("click", function (e) {
        e.preventDefault();
        document
            .querySelectorAll(".menu-item")
            .forEach((i) => i.classList.remove("active"));
        this.classList.add("active");
    });
});
