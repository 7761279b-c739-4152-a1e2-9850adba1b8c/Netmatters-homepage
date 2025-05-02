
const email_regex = new RegExp(String.raw`^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$`);
const phone_regex = new RegExp(String.raw`^((?:\+|00)[17](?: |\-)?|(?:\+|00)[1-9]\d{0,2}(?: |\-)?|(?:\+|00)1\-\d{3}(?: |\-)?)?(0\d|\([0-9]{3}\)|[1-9]{0,3})(?:((?: |\-)[0-9]{2}){4}|((?:[0-9]{2}){4})|((?: |\-)[0-9]{3}(?: |\-)[0-9]{4})|([0-9]{7}))$`);

const name_ = document.getElementById('name');
const company = document.getElementById('company');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const message = document.getElementById('message');
const checkbox = document.getElementById('real-checkbox');

const fake_checkbox = document.getElementById('fake-checkbox');
const checkbox_clickable = document.getElementById('checkbox-wrapper');



function validName(keepValid = false) {
    if (name_.value == '') {
        if (!keepValid) {
            name_.className = 'invalid';
        }
        return false;
    } else {
        name_.className = '';
        return true;
    }
}
name_.addEventListener('input', () => validName(true));
name_.addEventListener('focusout', () => validName());

function validCompany(keepValid = false) {
    // company isn't required
    return true;
}
company.addEventListener('input', () => validCompany(true));
company.addEventListener('focusout', validCompany);

function validEmail(keepValid = false) {
    if (email.value == '' || !email_regex.test(email.value)) {
        if (!keepValid) {
            email.className = 'invalid';
        }
        return false;
    } else {
        email.className = '';
        return true;
    }
}
email.addEventListener('input', () => validEmail(true));
email.addEventListener('focusout', () => validEmail());

function validPhone(keepValid = false) {
    if (phone.value == '') {
        // phone regex is only done serverside
        if (!keepValid) {
            phone.className = 'invalid';
        }
        return false;
    } else {
        phone.className = '';
        return true;
    }
}
phone.addEventListener('input', () => validPhone(true));
phone.addEventListener('focusout', () => validPhone());

function validMessage(keepValid = false) {
    if (message.value == '') {
        if (!keepValid) {
            message.className = 'invalid';
        }
        return false;
    } else {
        message.className = '';
        return true;
    }
}
message.addEventListener('input', () => validMessage(true));
message.addEventListener('focusout', () => validMessage());


function toggleCheckbox() {
    console.log('toggle', checkbox.checked);
    checkbox.checked = !checkbox.checked;
    if (checkbox.checked) {
        fake_checkbox.classList = 'enabled';
    } else {
        fake_checkbox.classList = '';
    }
}
checkbox_clickable.addEventListener('click', toggleCheckbox);

function checkAllValid() {
    return (!validName() + !validCompany() + !validEmail() + !validPhone() + !validMessage() == 0);
}
document.getElementById('contact-form').addEventListener('submit', (event) => {
    if (!checkAllValid()) {
        event.preventDefault();
        return;
    }
    // send to backend (through form action url)
});
