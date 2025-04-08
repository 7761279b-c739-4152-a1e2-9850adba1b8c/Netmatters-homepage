const headerElement = document.getElementById('header')
let lastScrollY = window.scrollY;

window.addEventListener('scroll', (event) => {
    if (window.scrollY > lastScrollY) {
        scrollDown();
    } else if (window.scrollY < lastScrollY) {
        scrollUp();
    }
    lastScrollY = window.scrollY
})

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

headerElement.classList.add('sticky');