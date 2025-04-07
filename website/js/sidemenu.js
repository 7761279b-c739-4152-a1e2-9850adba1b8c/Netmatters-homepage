const menuButton = document.getElementById('hamburger-box');
const notSideMenu = document.getElementById('not-side-menu');
const sideMenu = document.getElementById('side-menu');
let menuOpen = false;

function open() {
    notSideMenu.classList.add('menu-open');
    sideMenu.classList.add('menu-open');
    menuOpen = true;
}

function close() {
    notSideMenu.classList.remove('menu-open');
    sideMenu.classList.remove('menu-open');
    menuOpen = false;
}

menuButton.addEventListener('click', (event) => {
    if (menuOpen) {
        close();
    } else {
        open()
    }
    event.stopPropagation();
});

notSideMenu.addEventListener('click', (event) => {
    if (menuOpen) {
        close();
        event.preventDefault();
        event.stopPropagation();
    }
})