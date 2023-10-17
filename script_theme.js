document.addEventListener("DOMContentLoaded", () => {
    const themeToggler = document.querySelector(".theme-toggler");
    const body = document.body;
    const form = document.querySelector("form");
    const icon = themeToggler.querySelector(".theme-icon");
  
    themeToggler.addEventListener("click", (event) => {
        event.preventDefault();
  
        const currentTheme = body.getAttribute("data-theme");
        const timestamp = new Date().getTime(); // Obtenez le timestamp actuel

        if (currentTheme === "light") {
            body.setAttribute("data-theme", "dark");
            form.setAttribute("data-theme", "dark");
            icon.src = `sun.png?${timestamp}`; // Ajoutez le timestamp à l'URL de l'image
        } else {
            body.setAttribute("data-theme", "light");
            form.setAttribute("data-theme", "light");
            icon.src = `full-moon.png?${timestamp}`; // Ajoutez le timestamp à l'URL de l'image
        }
    });
});
