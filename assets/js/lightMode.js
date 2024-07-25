
const toggle = document.getElementById('darkModeToggle');
const toggleMb = document.getElementById('darkModeToggle-mobile');
const body = document.body;

function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

toggle.addEventListener('change', () => {
    body.classList.toggle('dark-mode', toggle.checked);
    if (body.classList.contains('dark-mode')) {
        setCookie('theme', 'dark', 7);
    } else {
        setCookie('theme', 'light', 7);
    }
});

toggleMb.addEventListener('change', () => {
    body.classList.toggle('dark-mode', toggleMb.checked);
    if (body.classList.contains('dark-mode')) {
        setCookie('theme', 'dark', 7);
    } else {
        setCookie('theme', 'light', 7);
    }
});

function applySavedTheme() {
    const savedTheme = getCookie('theme');
    const body = document.body;
    if (savedTheme === 'dark') {
        body.classList.add('dark-mode');
    } else {
        body.classList.remove('dark-mode');
    }
}

window.addEventListener('load', applySavedTheme);