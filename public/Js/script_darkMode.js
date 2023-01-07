const body = document.querySelector("body");
const header = document.querySelector("header");
const footer = document.querySelector("footer");
const darkmode = document.querySelector(".text-bg-light");

const darkModeBtn = document.querySelector(".darkModeBtn");

function setDarkMode(isDark) {
    if (isDark) {
        body.classList.add("text-bg-dark");
        header.classList.add("text-bg-dark");
        footer.classList.add("text-bg-dark");
        darkmode.classList.add("text-bg-dark");
        document.cookie = "darkMode=true; SameSite=None; Secure";
    } else {
        body.classList.remove("text-bg-dark");
        header.classList.remove("text-bg-dark");
        footer.classList.remove("text-bg-dark");
        darkmode.classList.remove("text-bg-dark");
        document.cookie = "darkMode=false; SameSite=None; Secure";
    }
}

function toggleDarkMode() {
    const isDark = body.classList.contains("text-bg-dark");
    setDarkMode(!isDark);
    darkModeBtn.innerHTML = `<span>${isDark ? "Dark" : "Light"} Mode</span>`;
}

let isDarkMode = false;

if (document.cookie) {
    const cookies = document.cookie.split("; ");
    for (const cookie of cookies) {
        const [name, value] = cookie.split("=");
        if (name === "darkMode") {
            isDarkMode = value === "true";
            break;
        }
    }
}

setDarkMode(isDarkMode);
darkModeBtn.innerHTML = `<span>${isDarkMode ? "Light" : "Dark"} Mode</span>`;

darkModeBtn.addEventListener("click", toggleDarkMode);
