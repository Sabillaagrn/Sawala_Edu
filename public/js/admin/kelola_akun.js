document.addEventListener("DOMContentLoaded", () => {
  const buttonDropdown = document.getElementById("dropdown");
  const dropdownList   = document.getElementById("dropdown_list");
  const buttonSiswa    = document.getElementById("button_siswa");
  const buttonWali     = document.getElementById("button_wali");

  if (buttonDropdown && dropdownList) {
    buttonDropdown.addEventListener("click", () => {
      dropdownList.style.display =
        dropdownList.style.display === "flex" ? "none" : "flex";
    });
  }

  if (buttonSiswa) {
    buttonSiswa.addEventListener("click", () => {
      window.location.href = `${window.baseUrl}/kelolaakun/siswa`;
    });
  }

  if (buttonWali) {
    buttonWali.addEventListener("click", () => {
      window.location.href = `${window.baseUrl}/kelolaakun/wali_kelas`;
    });
  }
});
