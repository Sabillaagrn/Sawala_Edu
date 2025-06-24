function toggleDropdown() {
    const menu = document.getElementById("dropdownMenu");
    menu.classList.toggle("show");
}

window.addEventListener("click", function (e) {
    const dropdown = document.querySelector(".dropdown");
    const dropdownMenu = document.getElementById("dropdownMenu");
    if (
        !dropdown.contains(e.target) &&
        dropdownMenu.classList.contains("show")
    ) {
        dropdownMenu.classList.remove("show");
    }
});
