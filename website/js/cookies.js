const consentElement = document.getElementById('manage-consent');
const cookiesElement = document.getElementById('cookies');
const acceptElement = document.getElementById('accept-cookies');
const settingsElement = document.getElementById('cookies-settings');

if (localStorage.getItem('cookies') == undefined) {
    cookiesElement.style.display = "flex";
}

consentElement.addEventListener('click', () => {
    cookiesElement.style.display = 'flex';
})

acceptElement.addEventListener('click', (event) => {
    cookiesElement.style.display = "none";
    event.preventDefault();
    localStorage.cookies = 'all';
})

settingsElement.addEventListener('click', (event) => {
    cookiesElement.style.display = "none";
    event.preventDefault();
})
