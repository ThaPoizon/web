function toggleStyle() {
    var stylesheet = document.getElementById("stylesheet");
    if (stylesheet.getAttribute("href") === "css/styles.css") {
        stylesheet.setAttribute("href", "css/obscuro1.css");
    } else {
        stylesheet.setAttribute("href", "css/styles.css");
    }
}