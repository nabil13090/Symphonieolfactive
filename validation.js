document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form');
    const lnameInput = document.querySelector('#lname');
    const emailInput = document.querySelector('#emailInput');
    const passwordInput = document.querySelector('#mot_de_passe');

    let lnameValid = false;
    let emailValid = false;
    let passwordValid = false;

    // Regex
    const NameRegex = /^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/u;
    const EmailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const PasswordRegex = /^.{6,}$/; 

    
    function addClass(element, regex, value) {
        if (regex.test(value)) {
            element.classList.add('is-valid');
            element.classList.remove('is-invalid');
            return true;
        } else {
            element.classList.add('is-invalid');
            element.classList.remove('is-valid');
            return false;
        }
    }
    
    lnameInput.addEventListener('input', (e) => {
        lnameValid = addClass(lnameInput, NameRegex, e.target.value);
    });

    emailInput.addEventListener('input', (e) => {
        emailValid = addClass(emailInput, EmailRegex, e.target.value);
    });

    passwordInput.addEventListener('input', (e) => {
        passwordValid = addClass(passwordInput, PasswordRegex, e.target.value);
    });

    form.addEventListener('submit', (e) => {
        if (!lnameValid || !emailValid || !passwordValid) {
            e.preventDefault();
            if (!lnameValid) {
                lnameInput.classList.add('is-invalid');
            }
            if (!emailValid) {
                emailInput.classList.add('is-invalid');
            }
            if (!passwordValid) {
                passwordInput.classList.add('is-invalid');
            }
        }
    });
});
