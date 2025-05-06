
const email_regex = new RegExp(String.raw`^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$`);

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
    checkbox.checked = !checkbox.checked;
    if (checkbox.checked) {
        fake_checkbox.classList = 'enabled';
    } else {
        fake_checkbox.classList = '';
    }
}
checkbox_clickable.addEventListener('click', toggleCheckbox);
// if a submit was failed, might have a pre-set value
if (checkbox.checked) {
    fake_checkbox.classList = 'enabled';
} else {
    fake_checkbox.classList = '';
}

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

for (let element of document.getElementsByClassName('form-error')) {
    element.getElementsByClassName('close')[0].addEventListener('click', () => {
        element.remove();
    })
}
for (let element of document.getElementsByClassName('form-success')) {
    element.getElementsByClassName('close')[0].addEventListener('click', () => {
        element.remove();
    })
}
