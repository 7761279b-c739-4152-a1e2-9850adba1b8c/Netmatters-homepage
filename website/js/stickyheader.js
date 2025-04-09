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
});

function scrollUp() {
    if (window.scrollY > 0) {
        if (!headerElement.classList.contains('sticky')) {
            headerElement.classList.add('sticky');
        }
    } else {
        scrollDown();
    }
}

function scrollDown() {
    if (headerElement.classList.contains('sticky')) {
        headerElement.classList.remove('sticky');
    }
}
