oohButton = document.getElementById('ooh-button');
ooh = document.getElementById('out-of-hours');
visible = false;

oohButton.addEventListener('click', event => {
    event.preventDefault();
    if (visible) {
        ooh.style.maxHeight = '0';
        visible = false;
    } else {
        ooh.style.maxHeight = '250px';
        visible = true;
    }
})