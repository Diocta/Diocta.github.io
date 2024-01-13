// Toggle class active
const navbarNav = document.querySelector('.navbar-nav');
// ketika menu icons di klik
document.querySelector('#menu-icons').onclick = () => {
    navbarNav.classList.toggle('active');
};

// klik di luar sidebar untuk menghilang nav
const menu = document.querySelector('#menu-icons');

document.addEventListener('click', function (e) {
    if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove('active');
    }
})