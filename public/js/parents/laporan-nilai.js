document.addEventListener("DOMContentLoaded", () => {
    const data = {
        10: {
            1: [
                {
                    no: 1,
                    kode: "MAT101",
                    nama: "Matematika",
                    nilai: 88,
                    huruf: "A",
                },
                {
                    no: 2,
                    kode: "BHS102",
                    nama: "Bahasa Indonesia",
                    nilai: 83,
                    huruf: "A-",
                },
                {
                    no: 3,
                    kode: "ING103",
                    nama: "Bahasa Inggris",
                    nilai: 79,
                    huruf: "B+",
                },
                {
                    no: 4,
                    kode: "IPA104",
                    nama: "Ilmu Pengetahuan Alam",
                    nilai: 85,
                    huruf: "A",
                },
                {
                    no: 5,
                    kode: "IPS105",
                    nama: "Ilmu Pengetahuan Sosial",
                    nilai: 77,
                    huruf: "B+",
                },
                {
                    no: 6,
                    kode: "PKN106",
                    nama: "Pendidikan Kewarganegaraan",
                    nilai: 82,
                    huruf: "A-",
                },
                {
                    no: 7,
                    kode: "SEN107",
                    nama: "Seni Budaya",
                    nilai: 90,
                    huruf: "A",
                },
                {
                    no: 8,
                    kode: "ORK108",
                    nama: "Pendidikan Jasmani",
                    nilai: 75,
                    huruf: "B",
                },
            ],
            2: [
                {
                    no: 1,
                    kode: "MAT101",
                    nama: "Matematika",
                    nilai: 85,
                    huruf: "A-",
                },
                {
                    no: 2,
                    kode: "BHS102",
                    nama: "Bahasa Indonesia",
                    nilai: 80,
                    huruf: "B+",
                },
                {
                    no: 3,
                    kode: "ING103",
                    nama: "Bahasa Inggris",
                    nilai: 78,
                    huruf: "B",
                },
                {
                    no: 4,
                    kode: "IPA104",
                    nama: "Ilmu Pengetahuan Alam",
                    nilai: 82,
                    huruf: "A-",
                },
                {
                    no: 5,
                    kode: "IPS105",
                    nama: "Ilmu Pengetahuan Sosial",
                    nilai: 75,
                    huruf: "B",
                },
                {
                    no: 6,
                    kode: "PKN106",
                    nama: "Pendidikan Kewarganegaraan",
                    nilai: 80,
                    huruf: "B+",
                },
                {
                    no: 7,
                    kode: "SEN107",
                    nama: "Seni Budaya",
                    nilai: 88,
                    huruf: "A-",
                },
                {
                    no: 8,
                    kode: "ORK108",
                    nama: "Pendidikan Jasmani",
                    nilai: 70,
                    huruf: "B-",
                },
            ],
        },
        11: {
            1: [
                {
                    no: 1,
                    kode: "MAT111",
                    nama: "Matematika Lanjutan",
                    nilai: 90,
                    huruf: "A",
                },
                {
                    no: 2,
                    kode: "BHS112",
                    nama: "Bahasa Indonesia",
                    nilai: 85,
                    huruf: "A-",
                },
                {
                    no: 3,
                    kode: "ING113",
                    nama: "Bahasa Inggris",
                    nilai: 80,
                    huruf: "B+",
                },
                {
                    no: 4,
                    kode: "IPA114",
                    nama: "Ilmu Pengetahuan Alam",
                    nilai: 88,
                    huruf: "A",
                },
                {
                    no: 5,
                    kode: "IPS115",
                    nama: "Ilmu Pengetahuan Sosial",
                    nilai: 79,
                    huruf: "B+",
                },
                {
                    no: 6,
                    kode: "PKN116",
                    nama: "Pendidikan Kewarganegaraan",
                    nilai: 84,
                    huruf: "A-",
                },
                {
                    no: 7,
                    kode: "SEN117",
                    nama: "Seni Budaya",
                    nilai: 92,
                    huruf: "A",
                },
                {
                    no: 8,
                    kode: "ORK118",
                    nama: "Pendidikan Jasmani",
                    nilai: 78,
                    huruf: "B",
                },
            ],
            2: [
                {
                    no: 1,
                    kode: "MAT111",
                    nama: "Matematika Lanjutan",
                    nilai: 87,
                    huruf: "A-",
                },
                {
                    no: 2,
                    kode: "BHS112",
                    nama: "Bahasa Indonesia",
                    nilai: 82,
                    huruf: "B+",
                },
                {
                    no: 3,
                    kode: "ING113",
                    nama: "Bahasa Inggris",
                    nilai: 79,
                    huruf: "B",
                },
                {
                    no: 4,
                    kode: "IPA114",
                    nama: "Ilmu Pengetahuan Alam",
                    nilai: 85,
                    huruf: "A-",
                },
                {
                    no: 5,
                    kode: "IPS115",
                    nama: "Ilmu Pengetahuan Sosial",
                    nilai: 77,
                    huruf: "B",
                },
                {
                    no: 6,
                    kode: "PKN116",
                    nama: "Pendidikan Kewarganegaraan",
                    nilai: 81,
                    huruf: "B+",
                },
                {
                    no: 7,
                    kode: "SEN117",
                    nama: "Seni Budaya",
                    nilai: 89,
                    huruf: "A-",
                },
                {
                    no: 8,
                    kode: "ORK118",
                    nama: "Pendidikan Jasmani",
                    nilai: 74,
                    huruf: "B-",
                },
            ],
        },
        12: {
            1: [
                {
                    no: 1,
                    kode: "MAT121",
                    nama: "Matematika Tingkat Lanjut",
                    nilai: 92,
                    huruf: "A",
                },
                {
                    no: 2,
                    kode: "BHS122",
                    nama: "Bahasa Indonesia",
                    nilai: 87,
                    huruf: "A-",
                },
                {
                    no: 3,
                    kode: "ING123",
                    nama: "Bahasa Inggris",
                    nilai: 83,
                    huruf: "B+",
                },
                {
                    no: 4,
                    kode: "IPA124",
                    nama: "Ilmu Pengetahuan Alam",
                    nilai: 89,
                    huruf: "A",
                },
                {
                    no: 5,
                    kode: "IPS125",
                    nama: "Ilmu Pengetahuan Sosial",
                    nilai: 81,
                    huruf: "B+",
                },
                {
                    no: 6,
                    kode: "PKN126",
                    nama: "Pendidikan Kewarganegaraan",
                    nilai: 85,
                    huruf: "A-",
                },
                {
                    no: 7,
                    kode: "SEN127",
                    nama: "Seni Budaya",
                    nilai: 93,
                    huruf: "A",
                },
                {
                    no: 8,
                    kode: "ORK128",
                    nama: "Pendidikan Jasmani",
                    nilai: 79,
                    huruf: "B",
                },
            ],
            2: [
                {
                    no: 1,
                    kode: "MAT121",
                    nama: "Matematika Tingkat Lanjut",
                    nilai: 90,
                    huruf: "A-",
                },
                {
                    no: 2,
                    kode: "BHS122",
                    nama: "Bahasa Indonesia",
                    nilai: 85,
                    huruf: "B+",
                },
                {
                    no: 3,
                    kode: "ING123",
                    nama: "Bahasa Inggris",
                    nilai: 81,
                    huruf: "B",
                },
                {
                    no: 4,
                    kode: "IPA124",
                    nama: "Ilmu Pengetahuan Alam",
                    nilai: 87,
                    huruf: "A-",
                },
                {
                    no: 5,
                    kode: "IPS125",
                    nama: "Ilmu Pengetahuan Sosial",
                    nilai: 79,
                    huruf: "B",
                },
                {
                    no: 6,
                    kode: "PKN126",
                    nama: "Pendidikan Kewarganegaraan",
                    nilai: 83,
                    huruf: "B+",
                },
                {
                    no: 7,
                    kode: "SEN127",
                    nama: "Seni Budaya",
                    nilai: 91,
                    huruf: "A-",
                },
                {
                    no: 8,
                    kode: "ORK128",
                    nama: "Pendidikan Jasmani",
                    nilai: 77,
                    huruf: "B-",
                },
            ],
        },
    };

    const kelasWrapper = document.getElementById("kelasWrapper");
    const semesterWrapper = document.getElementById("semesterWrapper");
    const selectedKelas = document.getElementById("selectedKelas");
    const selectedSemester = document.getElementById("selectedSemester");
    const kelasOptions = kelasWrapper.querySelectorAll(".custom-option");
    const semesterOptions = semesterWrapper.querySelectorAll(".custom-option");
    const tableBody = document.querySelector(".laporan-table tbody");
    const printInfo = document.querySelector(".print-info");

    function renderTable(kelas, semester) {
        const rows = (data[kelas] && data[kelas][semester]) || [];
        tableBody.innerHTML = "";
        rows.forEach((row) => {
            const tr = document.createElement("tr");
            tr.innerHTML = `
        <td>${row.no}</td>
        <td>${row.kode}</td>
        <td>${row.nama}</td>
        <td>${row.nilai}</td>
        <td>${row.huruf}</td>
      `;
            tableBody.appendChild(tr);
        });

        // Update print info text
        const kelasText = selectedKelas.textContent;
        const semesterText = selectedSemester.textContent;
        printInfo.textContent = `${kelasText} | ${semesterText}`;
    }

    function closeAllDropdowns() {
        kelasWrapper.classList.remove("open");
        semesterWrapper.classList.remove("open");
    }

    // Event listeners for kelas dropdown
    const kelasTrigger = kelasWrapper.querySelector(".custom-select-trigger");
    kelasTrigger.addEventListener("click", (e) => {
        e.stopPropagation();
        const isOpen = kelasWrapper.classList.contains("open");
        closeAllDropdowns();
        if (!isOpen) {
            kelasWrapper.classList.add("open");
        }
    });

    kelasOptions.forEach((option) => {
        option.addEventListener("click", () => {
            kelasOptions.forEach((opt) => opt.classList.remove("selected"));
            option.classList.add("selected");
            selectedKelas.textContent = option.textContent;
            closeAllDropdowns();
            renderTable(
                option.getAttribute("data-value"),
                semesterWrapper
                    .querySelector(".custom-option.selected")
                    .getAttribute("data-value")
            );
        });
    });

    // Event listeners for semester dropdown
    const semesterTrigger = semesterWrapper.querySelector(
        ".custom-select-trigger"
    );
    semesterTrigger.addEventListener("click", (e) => {
        e.stopPropagation();
        const isOpen = semesterWrapper.classList.contains("open");
        closeAllDropdowns();
        if (!isOpen) {
            semesterWrapper.classList.add("open");
        }
    });

    semesterOptions.forEach((option) => {
        option.addEventListener("click", () => {
            semesterOptions.forEach((opt) => opt.classList.remove("selected"));
            option.classList.add("selected");
            selectedSemester.textContent = option.textContent;
            closeAllDropdowns();
            renderTable(
                kelasWrapper
                    .querySelector(".custom-option.selected")
                    .getAttribute("data-value"),
                option.getAttribute("data-value")
            );
        });
    });

    // Close dropdowns if clicking outside
    document.addEventListener("click", () => {
        closeAllDropdowns();
    });

    // Initial render
    renderTable("10", "1");
});
