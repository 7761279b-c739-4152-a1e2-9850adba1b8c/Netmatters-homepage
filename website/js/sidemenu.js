const menuButton = document.getElementById('hamburger-box');
const notSideMenu = document.getElementById('not-side-menu');
const inert = document.getElementById('side-menu-inert');
const sideMenu = document.getElementById('side-menu');
let menuOpen = false;

function open() {
    notSideMenu.classList.add('menu-open');
    sideMenu.classList.add('menu-open');
    inert.setAttribute('inert', '');
    menuOpen = true;
    openAnimation();
}

function close() {
    notSideMenu.classList.remove('menu-open');
    sideMenu.classList.remove('menu-open');
    inert.removeAttribute('inert');
    menuOpen = false;
    closeAnimation();
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

function menuTransition(time) {
    for (let div of menuButton.children) {
        div.style.transition = `all ${time}s ease`;
    }
}
async function openAnimation() {
    menuTransition(0.125);
    menuButton.classList.add('open1');
    setTimeout(() => {
        menuTransition(0.25);
        menuButton.classList.remove('open1');
        menuButton.classList.add('open2');
    }, 125);
}

async function closeAnimation() {
    menuTransition(0.25);
    if (menuButton.classList.contains('open2')) {
        menuButton.classList.remove('open2');
    }
    menuButton.classList.add('open1');
    setTimeout(() => {
        menuTransition(0.125);
        menuButton.classList.remove('open1');
    }, 250);
}