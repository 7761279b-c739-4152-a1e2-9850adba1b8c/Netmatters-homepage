const consentElement = document.getElementById('manage-consent');
const cookiesElement = document.getElementById('cookies');
const acceptElement = document.getElementById('accept-cookies');

consentElement.addEventListener('click', () => {
    cookiesElement.style.display = 'flex';
})

acceptElement.addEventListener('click', (event) => {
    cookiesElement.style.display = "none";
    event.preventDefault();
})