// Ensure the DOM is fully loaded before running the JavaScript code
document.addEventListener("DOMContentLoaded", function () {
    // Select the menu element
    const menu = document.querySelector(".header .menu");

    // Toggle the menu when the menu button is clicked
    document.querySelector("#menu-btn").addEventListener("click", () => {
        menu.classList.toggle("active");
    });

    // Close the menu when scrolling
    window.addEventListener("scroll", () => {
        menu.classList.remove("active");
    });

    // Limit the input values to their maxLength
    document.querySelectorAll('input[type="number"]').forEach((inputNumber) => {
        inputNumber.addEventListener("input", () => {
            if (inputNumber.value.length > inputNumber.maxLength) {
                inputNumber.value = inputNumber.value.slice(
                    0,
                    inputNumber.maxLength
                );
            }
        });
    });

    // Toggle the FAQ item's visibility
    document
        .querySelectorAll(".faq .box-container .box h3")
        .forEach((headings) => {
            headings.addEventListener("click", () => {
                headings.parentElement.classList.toggle("active");
            });
        });
});
