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

    // Retrieve the user's darkMode preference from local storage
    let darkMode = localStorage.getItem("darkMode");

    // Select the dark mode toggle button
    const darkModeToggle = document.querySelector("#dark-mode-toggle");

    // Function to enable dark mode
    const enableDarkMode = () => {
        // 1. Add the "darkmode" class to the body
        document.body.classList.add("darkmode");
        // 2. Update darkMode in local storage
        localStorage.setItem("darkMode", "enabled");
    };

    // Function to disable dark mode
    const disableDarkMode = () => {
        // 1. Remove the "darkmode" class from the body
        document.body.classList.remove("darkmode");
        // 2. Update darkMode in local storage
        localStorage.setItem("darkMode", null);
    };

    // Check if the user already enabled darkMode
    // If yes, start with it enabled
    if (darkMode === "enabled") {
        enableDarkMode();
    }

    // Toggle dark mode when the button is clicked
    darkModeToggle.addEventListener("click", () => {
        // Get the current darkMode setting
        darkMode = localStorage.getItem("darkMode");

        // If it's not currently enabled, enable it
        if (darkMode !== "enabled") {
            enableDarkMode();
        } else {
            // If it has been enabled, turn it off
            disableDarkMode();
        }
    });
});
