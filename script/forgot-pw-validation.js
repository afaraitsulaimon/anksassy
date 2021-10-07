var userForgotPwForm = document.forms.forgotPassForm;

//check error on user email address for login

var theErrOnForgotPassEmail = document.getElementById("errorOnEmailForgotPw");

function checkForgotPwEmail() {

    if (userForgotPwForm.emailForForgotPw.value === "" || userForgotPwForm.emailForForgotPw.value === null) {

        userForgotPwForm.emailForForgotPw.style.borderColor = 'red';
        theErrOnForgotPassEmail.innerHTML = "Email address is required";

    } else if (userForgotPwForm.emailForForgotPw.value.indexOf('@') > userForgotPwForm.emailForForgotPw.value.lastIndexOf('.')) {

        userForgotPwForm.emailForForgotPw.style.borderColor = 'red';
        theErrOnForgotPassEmail.innerHTML = "Enter email address correctly";

    } else if (userForgotPwForm.emailForForgotPw.value.indexOf('@') === -1) {

        userForgotPwForm.emailForForgotPw.style.borderColor = 'red';
        theErrOnForgotPassEmail.innerHTML = "Invalid Email address";

    } else {

        userForgotPwForm.emailForForgotPw.style.borderColor = 'green';
        theErrOnForgotPassEmail.innerHTML = "";

    }
}

userForgotPwForm.emailForForgotPw.addEventListener("blur", checkForgotPwEmail, false);