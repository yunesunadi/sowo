const getStartedBtn = document.querySelector("#get-started-btn");
const signUpBtn = document.querySelector("#signup-btn");
const loginBtn = document.querySelector("#login-btn");
const modalCloseBtn = document.querySelector("#modal-close-btn");
const modalCloseIcon = document.querySelector("#modal-close-icon");
const loginModalCloseBtn = document.querySelector("#login-modal-close-btn");
const loginModalCloseIcon = document.querySelector("#login-modal-close-icon");
const heroContent = document.querySelector("#hero-content");

getStartedBtn.addEventListener("click", () => {
    heroContent.classList.remove("z-1");
});

signUpBtn.addEventListener("click", () => {
    heroContent.classList.remove("z-1");
});

loginBtn.addEventListener("click", () => {
    heroContent.classList.remove("z-1");
});

modalCloseBtn.addEventListener("click", () => {
    heroContent.classList.add("z-1");
});

modalCloseIcon.addEventListener("click", () => {
    heroContent.classList.add("z-1");
});

loginModalCloseBtn.addEventListener("click", () => {
    heroContent.classList.add("z-1");
});

loginModalCloseIcon.addEventListener("click", () => {
    heroContent.classList.add("z-1");
});