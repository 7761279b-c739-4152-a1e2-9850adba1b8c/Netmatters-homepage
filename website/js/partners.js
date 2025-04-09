
async function createSlide(element, initialDelay) {
    const slideList = document.getElementById(element);
    let currentSlide = 0;
    const numPositions = slideList.children.length;

    for (let i = 0; i < 8; i++) {
        slideList.appendChild(slideList.children[i].cloneNode(true));
    }

    function setSlide(num) {
        currentSlide = num;
        slideList.style.transform = `translateX(-${slideList.children[currentSlide].offsetLeft - 20}px)`;
        checkWrap(250);
    }
    async function checkWrap(delay = 0) {
        // if we're on repeat slides, disable transition and move to slide 0
        if (currentSlide < numPositions) {return;}
        // check if we need to wait for an animation to finish
        if (delay > 0) {
            await new Promise(resolve => setTimeout(resolve, delay));
        }
        slideList.style.transition = "none";
        setSlide(currentSlide % numPositions);
    }
    function autoSlide() {
        slideList.style.transition = '0.25s ease';
        setSlide(currentSlide + 1);
        setTimeout(autoSlide, 3000);
    }
    slideList.style.transform = 'translateX(20px)';
    setTimeout(autoSlide, initialDelay);
}

createSlide('partners', 3000);
createSlide('cases', 2500);
