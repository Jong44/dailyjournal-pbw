let theme = localStorage.getItem("theme") || "dark";
var themeId = document.getElementById("theme");

const bodyTag = document.querySelector('body');
const mainTag = document.querySelector('main');
const navTag = document.querySelector('nav');

function changeTheme() {
    theme = theme === "light" ? "dark" : "light";
    localStorage.setItem("theme", theme);
    setTheme(theme);
}


function setTheme(theme) {
    if (theme === "light") {
        mainTag.classList.remove('bg-dark');
        navTag.classList.remove('bg-dark');
        bodyTag.classList.remove('bg-dark');
        themeId.innerHTML = '<i class="fa-solid fa-sun"></i>';
        document.documentElement.style.setProperty("--background-color", "#f1f1f1");
        document.documentElement.style.setProperty("--text-color", "#16161a");
        mainTag.classList.add('bg-light');
        navTag.classList.add('bg-light');
        bodyTag.classList.add('bg-light');
    } else {
        mainTag.classList.remove('bg-light');
        navTag.classList.remove('bg-light');
        bodyTag.classList.remove('bg-light');
        document.documentElement.style.setProperty("--background-color", "#16161a");
        document.documentElement.style.setProperty("--text-color", "#fffffe");
        themeId.innerHTML = '<i class="fa-solid fa-moon"></i>';
        mainTag.classList.add('bg-dark');
        navTag.classList.add('bg-dark');
        bodyTag.classList.add('bg-dark');
    }
}

setTheme(theme);