const navContent = document.querySelector("#nav-content");
const navItems = document.querySelectorAll(".nav-item");

navItems.forEach(navItem => {
    navItem.addEventListener("click", () => {
        navContent.classList.toggle("show");
    });
});