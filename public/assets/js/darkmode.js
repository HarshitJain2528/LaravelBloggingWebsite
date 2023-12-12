// Function to enable dark mode for the settings card
function enableDarkModeForCard() {
    const settingsCard = document.getElementById('settingsCard');
    if (settingsCard) {
        settingsCard.classList.add('dark-mode-card');
    }
}

// Function to disable dark mode for the settings card
function disableDarkModeForCard() {
    const settingsCard = document.getElementById('settingsCard');
    if (settingsCard) {
        settingsCard.classList.remove('dark-mode-card');
    }
}

// Function to check user's preference for the settings card on page load
function checkDarkModePreferenceForCard() {
    const darkModeSetting = localStorage.getItem('darkMode');
    const settingsCard = document.getElementById('settingsCard');
    if (darkModeSetting === 'enabled' && settingsCard) {
        enableDarkModeForCard();
    } else {
        disableDarkModeForCard();
    }
}

// Event listener for dark mode toggle on the settings card
function addDarkModeToggleListener() {
    const darkModeToggle = document.getElementById('darkModeToggle');
    if (darkModeToggle) {
        darkModeToggle.addEventListener('change', function () {
            if (darkModeToggle.checked) {
                enableDarkModeForCard();
                localStorage.setItem('darkMode', 'enabled');
            } else {
                disableDarkModeForCard();
                localStorage.setItem('darkMode', 'disabled');
            }
        });
    }
}

// Check user's dark mode preference for the settings card on page load
document.addEventListener('DOMContentLoaded', function () {
    checkDarkModePreferenceForCard();
    addDarkModeToggleListener();
});
