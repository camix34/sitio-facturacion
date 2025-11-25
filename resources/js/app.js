import './bootstrap';

// Dark Mode functionality
document.addEventListener('DOMContentLoaded', function() {
    // Check for saved theme preference or default to light mode
    const currentTheme = localStorage.getItem('theme') || 'light';

    // Apply saved theme on page load
    if (currentTheme === 'dark') {
        document.body.classList.add('dark-mode');
        updateThemeIcon(true);
    }

    // Theme toggle functionality
    const themeToggle = document.getElementById('theme-toggle');
    if (themeToggle) {
        themeToggle.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');

            // Save theme preference
            const isDarkMode = document.body.classList.contains('dark-mode');
            localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');

            // Update icon
            updateThemeIcon(isDarkMode);
        });
    }

    // Function to update theme icon
    function updateThemeIcon(isDarkMode) {
        const themeIcon = document.getElementById('theme-icon');
        if (themeIcon) {
            if (isDarkMode) {
                themeIcon.classList.remove('bi-moon-stars-fill');
                themeIcon.classList.add('bi-sun-fill');
            } else {
                themeIcon.classList.remove('bi-sun-fill');
                themeIcon.classList.add('bi-moon-stars-fill');
            }
        }
    }
});
