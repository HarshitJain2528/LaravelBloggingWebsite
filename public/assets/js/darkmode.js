// Function to enable dark mode for all settings cards
function enableDarkModeForCards() {
    const settingsCards = document.querySelectorAll('.settingsCard');
    settingsCards.forEach(card => {
        card.classList.add('dark-mode-card');
    });
    console.log('Dark mode enabled for cards');

}

// Function to disable dark mode for all settings cards
function disableDarkModeForCards() {
    const settingsCards = document.querySelectorAll('.settingsCard');
    settingsCards.forEach(card => {
        card.classList.remove('dark-mode-card');
    });
}

// Function to check user's preference for the settings cards on page load
function checkDarkModePreferenceForCards() {
    const darkModeSetting = localStorage.getItem('darkMode');
    if (darkModeSetting === 'enabled') {
        enableDarkModeForCards();
    } else {
        disableDarkModeForCards();
    }
}

// Event listener for dark mode toggle on the settings cards
function addDarkModeToggleListener() {
    const darkModeToggle = document.getElementById('darkModeToggle');
    if (darkModeToggle) {
        darkModeToggle.addEventListener('change', function () {
            if (darkModeToggle.checked) {
                enableDarkModeForCards();
                localStorage.setItem('darkMode', 'enabled');
            } else {
                disableDarkModeForCards();
                localStorage.setItem('darkMode', 'disabled');
            }
        });
    }
}


// Check user's dark mode preference for the settings cards on page load
document.addEventListener('DOMContentLoaded', function () {
    checkDarkModePreferenceForCards();
    addDarkModeToggleListener();
});

