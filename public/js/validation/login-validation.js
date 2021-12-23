/*
let loginForm = document.getElementById('login-form');
let sinLogin = document.getElementById('sign-login');
let signPassword = document.getElementById('sign-password');

document.addEventListener('DOMContentLoaded', () =>{
    loginForm.addEventListener('submit', (event) => {
        if(validateLoginInput()){
            console.log('Valid!');
        }else{
            event.preventDefault();
        }
    });
});

let validateLoginInput = () => {
    let signLoginValue = login.value.trim();
    let signPasswordValue = password.value.trim();

    if(validLogin(signLoginValue) && validPassword(signPasswordValue)){
        return true;
    }else{
        return false;
    }
}

//////////////////////////////// function //////////////////////////////////////
*/