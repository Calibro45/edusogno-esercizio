// form, input field from DOM
const form = document.getElementById('form');
const userName = document.getElementById('name');
const surname = document.getElementById('surname');
const email = document.getElementById('email');
const password = document.getElementById('password');

// call event on form 

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs()

})

//** function control input values */

function checkInputs() {
    // get values of input
    const nameValue = userName.value.trim();
    const surnameValue = surname.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    isEmpty(nameValue, userName, 'Il Nome');
    isEmpty(surnameValue, surname, 'Il Cognome');
    isEmpty(passwordValue, password, 'La Password');

    if(emailValue === '') {
        isEmpty(emailValue, email, 'L\' E-mail');

    } else if(!isEmail(emailValue)) {
        setErrorFor(email, 'La mail non è valida');

    } else {
        setSuccessFor(email);
    }
    
}

//** Function control empty */

function isEmpty(value, input, msg) {
    if(value === '') {
        // showError
        // add error class
        setErrorFor(input, `${msg} è un campo obbligatorio`);

    } else {
        // add success class
        setSuccessFor(input);
    }
}

//** Function show error */

function setErrorFor(input, msg) {
    // div of the input
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    // add msg
    small.innerText = msg;

    // add class 
    formControl.className = 'form-control error';
}

//** Function success */ 

function setSuccessFor(input) {
    const formControl = input.parentElement;

    // add class 
    formControl.className = 'form-control success';
}

//** Function valid email */

function isEmail(email) {
    const emailRegex = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g;
    return emailRegex.test(email);

}
