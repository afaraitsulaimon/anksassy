var userLoginForm = document.forms.loginForm;

//check error on user email address for login

var theErrOnEmailLogin = document.getElementById("errorOnUserLoginEmail");

function checkLoginEmail() {

    if (userLoginForm.userLoginEmail.value === "" || userLoginForm.userLoginEmail.value === null) {

        userLoginForm.userLoginEmail.style.borderColor = 'red';
        theErrOnEmailLogin.innerHTML = "Email address is required";

    } else if (userLoginForm.userLoginEmail.value.indexOf('@') > userLoginForm.userLoginEmail.value.lastIndexOf('.')) {

        userLoginForm.userLoginEmail.style.borderColor = 'red';
        theErrOnEmailLogin.innerHTML = "Enter email address correctly";

    } else if (userLoginForm.userLoginEmail.value.indexOf('@') === -1) {

        userLoginForm.userLoginEmail.style.borderColor = 'red';
        theErrOnEmailLogin.innerHTML = "Invalid Email address";

    } else {

        userLoginForm.userLoginEmail.style.borderColor = 'green';
        theErrOnEmailLogin.innerHTML = "";

    }
}

userLoginForm.userLoginEmail.addEventListener("blur", checkLoginEmail, false);



//check error on user password for login

var theErrOnLoginPassword = document.getElementById("errorOnUserLoginPassword");

function checkLoginPassCode() {

    if (userLoginForm.userLoginPassword.value === "" || userLoginForm.userLoginPassword.value === null) {

        userLoginForm.userLoginPassword.style.borderColor = 'red';
        theErrOnLoginPassword.innerHTML = "Password is required";

    } else {

        userLoginForm.userLoginPassword.style.borderColor = 'green';
        theErrOnLoginPassword.innerHTML = "";

    }
}

userLoginForm.userLoginPassword.addEventListener("blur", checkLoginPassCode, false);