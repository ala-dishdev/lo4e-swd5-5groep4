document.addEventListener("DOMContentLoaded", () => {
    const toggleAccessibility = () => {

        const elementsToToggle = document.querySelectorAll("body, header, nav, main, footer, article, section, div");

        elementsToToggle.forEach(element => {
            element.classList.toggle("dark-mode");
            element.classList.toggle("high-contrast");
            element.classList.toggle("large-font");
        });
    };

    const accessibilityButton = document.querySelector(".toegankelijkheid");
    accessibilityButton.addEventListener("click", toggleAccessibility);
});