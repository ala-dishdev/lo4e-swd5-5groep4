document.addEventListener("DOMContentLoaded", () => {
    const toggleAccessibility = () => {
        document.body.classList.toggle("dark-mode");
        document.body.classList.toggle("high-contrast");
        document.body.classList.toggle("large-font");
    };

    const accessibilityButton = document.querySelector(".toegankelijkheid");
    accessibilityButton.addEventListener("click", toggleAccessibility);
});