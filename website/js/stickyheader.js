const headerElement = document.getElementById('header')
let lastScrollY = window.scrollY;
let scrollDirection = true;

window.addEventListener('scrollend', (event) => {
    if (scrollDirection) {
        scrollDown();
    } else {
        scrollUp();
    }
})

window.addEventListener('scroll', () => {
    scrollDirection = lastScrollY < window.scrollY;
    lastScrollY = window.scrollY;
    if (lastScrollY == 0) {
        scrollDirection = true;
        scrollDown();
    }
});

function scrollUp() {
    if (!headerElement.classList.contains('sticky')) {
        headerElement.classList.add('sticky');
    }
}

function scrollDown() {
    if (headerElement.classList.contains('sticky')) {
        headerElement.classList.remove('sticky');
    }
}
