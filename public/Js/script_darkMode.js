/**
 * Dark Mode
 */

const body = document.querySelector("body");
const header = document.querySelector("header");
const footer = document.querySelector("footer");
const darkmode = document.querySelector(".text-bg-light");


const darkModeBtn = document.querySelector(".darkModeBtn");

function dark(){
    body.classList.add("text-bg-dark");
    header.classList.add("text-bg-dark");
    footer.classList.add("text-bg-dark");
    darkmode.classList.add("text-bg-dark");
    document.cookie = "darkMode = false; SameSite=None; Secure"

}

function light(){
    document.body.classList.remove("text-bg-dark");
    header.classList.remove("text-bg-dark");
    footer.classList.remove("text-bg-dark");
    darkmode.classList.remove("text-bg-dark");
    document.cookie = "darkMode = true; SameSite=None; Secure"

}


if (document.cookie.split(";").some((item) => item.includes("darkMode=false"))) {
    dark();
} else {
    light();
}



darkModeBtn.addEventListener("click", () => {
    if (!body.classList.contains("text-bg-dark")) {
        darkModeBtn.innerHTML = "<span>Light Mode</span>";
        dark();

    } else {
        darkModeBtn.innerHTML = "<span>Dark Mode</span>";

        light();
    }
});
