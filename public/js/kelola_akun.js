const buttonDropdwon = document.getElementById("dropdown")
const dropdownList = document.getElementById("dropdown_list");

buttonDropdwon.addEventListener("click", function () {
    if (dropdownList.style.display == 'flex') {
        dropdownList.style.display = 'none';
    } else {
        dropdownList.style.display = 'flex';
    }
});

const buttonSiswa = document.getElementById("button_siswa")
const button_wali = document.getElementById("button_wali");


buttonSiswa.addEventListener("click", function () {
    window.location.href = window.baseUrl + '/kelolaakun/siswa';
});

button_wali.addEventListener("click", function () {
    window.location.href = window.baseUrl + '/kelolaakun/wali_kelas';
})