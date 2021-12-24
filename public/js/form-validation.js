// registration form validation
// работает очень плохо, не забыть полностью переделать!!!!
//////////////////// 1 variant
const form = document.getElementById('form');
let login = document.getElementById('login');
let password = document.getElementById('password');
let confirmPassword = document.getElementById('confirm-password');
let email = document.getElementById('email');
let userName = document.getElementById('main-name');
let policyCheckbox = document.getElementById('policy');


// if document loaded
document.addEventListener('DOMContentLoaded', () => {
    form.addEventListener('submit',(event) => {
        //event.preventDefault();
        if(validateInput()){
            console.log('Valid!');
        }else{
            event.preventDefault();
        }

    });
});

// validation function
let validateInput = () => {
    let loginValue = login.value.trim();
    let passwordValue = password.value.trim();
    let confirmPassValue = confirmPassword.value.trim();
    let emailValue = email.value.trim();
    let userNameValue = userName.value.trim();


    if( validLogin(loginValue) && validPassword(passwordValue) && validConfirmPassValue(confirmPassValue,passwordValue) &&
        validEmail(emailValue) && validName(userNameValue)){

        return true;
    }else{

        return false;
    }
}


///////////////////////////////////////////    functions   /////////////////////////////////////////////////////////////
let validLogin = loginValue => {
    if(loginValue==='' || (loginValue.length <3 && loginValue.length > 30)){
        setErrors(login, 'Логин должен быть от 3 до 30 символов.');
    }else{
        setSuccess(login);
        return true;
    }
}

let validEmail = emailValue => {
    if(emailValue === '') {
        setErrors(email, 'Введите Email.');
    } else if (!isValidEmail(emailValue)){
        setErrors(email, 'Введите валидный Email.');
    } else {
        setSuccess(email);
        return true;
    }
}

let validPassword = (passwordValue) => {
    if (passwordValue === '') {
        setErrors(password, 'Введите пароль');
    } else if (passwordValue.length < 8) {
        setErrors(password, "Пароль должен быть не менне 8 символов в длину");
    } else {
        setSuccess(password);
        return true;
    }
}

let validConfirmPassValue = (confirmPassValue, passwordValue) => {
    if(confirmPassValue === '') {
        setErrors(confirmPassword, '');
    } else if (confirmPassValue !== passwordValue) {
        setErrors(confirmPassword, "Пароли не совпадают");
    } else {
        setSuccess(confirmPassword);
        return true;
    }
}


let validName = userNameValue =>{
    if(userNameValue === ''){
        setErrors(userName, 'Введите имя.');
    }else if (userNameValue < 3){
        setErrors(userName,'Имя должно быть не менее 3 символов в длину.');
    }else{
        setSuccess(userName);
        return true;
    }
}

///////////////////////////////////////////////// function /////////////////////////////////////////////////////////////
let setErrors = (element, message) => {
    let inputControl = element.parentElement;
    let errorDisplay = inputControl.getElementsByClassName('error');

    errorDisplay.innerHTML = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

let setSuccess = element => {
    let inputControl = element.parentElement;
    let errorDisplay = inputControl.getElementsByClassName('error');

    errorDisplay.innerHTML = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
}


let isValidEmail = email => {
    let regexp = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    return regexp.test(String(email).toLowerCase());
}

