const slideList = document.getElementById('banner-list');
const buttonsList = document.getElementsByClassName('banner-circle');
let currentSlide = 0;

function setSlide(num) {
    buttonsList[currentSlide % 7].classList.remove('selected');
    currentSlide = num;
    slideList.style.transform = `translateX(-${100 * currentSlide}vw)`;
    buttonsList[currentSlide % 7].classList.add('selected');
}

function slideTo(num) {
    const slideTime = 0.3 * Math.abs(currentSlide - num)
    slideList.style.transition = `${slideTime}s ease`;
    setSlide(num);
    checkWrap(slideTime * 1000);
}

async function checkWrap(delay = 0) {
    // if we're on slide 7, disable transition and move to slide 0
    if (currentSlide < 7) {return;}
    // check if we need to wait for an animation to finish (e.g. scrolling right to slide 7)
    if (delay > 0) {
        await new Promise(resolve => setTimeout(resolve, delay));
    }
    slideList.style.transition = "none";
    setSlide(currentSlide % 7);
}

for (let i = 0; i < buttonsList.length; i++) {
    buttonsList[i].addEventListener('click', () => {
        slideTo(i);
    })
}

function autoSlide() {
    slideTo(currentSlide + 1);
    setTimeout(autoSlide, 10000);
}

setTimeout(autoSlide, 10000);
