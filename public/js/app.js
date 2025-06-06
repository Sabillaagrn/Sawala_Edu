<<<<<<< HEAD
import './bootstrap';
=======
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const sidebar = document.querySelector("aside");

    menuToggle.addEventListener("click", function () {
        sidebar.classList.toggle("open");
        menuToggle.classList.toggle("open");
    });
});
>>>>>>> admin_guru__siswa
