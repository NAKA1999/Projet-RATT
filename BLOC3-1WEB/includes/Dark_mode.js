
    const toggleButton = document.getElementById('darkModeToggle');
    const body = document.body;
    const darkIcon = toggleButton.querySelectorAll('span')[0];
    const lightIcon = toggleButton.querySelectorAll('span')[1];
    if (localStorage.getItem('dark-mode') === 'enabled') {
        body.classList.add('dark-mode');
        darkIcon.style.display = 'block';
        lightIcon.style.display = 'none';
    }
     function toggleDarkMode() {
        body.classList.toggle('dark-mode');
        if (body.classList.contains('dark-mode')) {
            darkIcon.style.display = 'block';
            lightIcon.style.display = 'none';
            localStorage.setItem('dark-mode', 'enabled');
        } else {
            darkIcon.style.display = 'none';
            lightIcon.style.display = 'block';
            localStorage.removeItem('dark-mode');
        }
    }
    toggleButton.addEventListener('click', toggleDarkMode);