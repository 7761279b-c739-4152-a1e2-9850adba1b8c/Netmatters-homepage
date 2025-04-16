const slideList = document.getElementById('banner-list');
const buttonsList = document.getElementsByClassName('banner-circle');
let currentSlide = 0;

// sliding from the last to the first should look the same direction
// so create a duplicate copy of the first element to slide to before snapping back to the start
slideList.appendChild(slideList.children[0].cloneNode(true));

function setSlideButton(num) {
    buttonsList[((currentSlide % 7) + 7) % 7].classList.remove('selected');
    buttonsList[((num % 7) + 7) % 7].classList.add('selected');
    if (((num % 7) + 7) % 7 == 0) {
        slideList.style.maxHeight = "";
    } else {
        slideList.style.maxHeight = "550px";
    }
    currentSlide = num;
}
function setSlide(num) {
    if (!isDragging) {
        setSlideButton(num);
    }
    slideList.style.transform = `translateX(-${100 * num}vw)`;
}

function slideTo(num) {
    const slideTime = 0.3 * Math.abs(currentSlide - num);
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
    if (!isDragging) {
        slideTo(currentSlide + 1);
    }
    setTimeout(autoSlide, 10000);
}

setTimeout(autoSlide, 10000);

isDragging = false;
dragX = 0;
slideList.addEventListener('mousedown', (event) => {
    isDragging = true;
    dragX = event.clientX;
    slideList.style.transition = "none";
    slideList.style.cursor = "grab";
})
document.addEventListener('mousemove', (event) => {
    if (isDragging) {
        setSlide(((currentSlide + (dragX - event.clientX) / (window.innerHeight) % 7) + 7) % 7);
    }
})
document.addEventListener('mouseup', (event) => {
    if (isDragging) {
        isDragging = false;
        slideList.style.transition = `0.3s ease`;
        slideList.style.cursor = "";
        setSlide(Math.round(((currentSlide + (dragX - event.clientX) / (window.innerHeight) % 7) + 7) % 7));
        checkWrap(300);
    }
})
