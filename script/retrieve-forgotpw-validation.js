let theRetrievePasswordForm = document.forms.retrieveForgotPassForm;
let theErrorOnNewPassword = document.getElementById("errorOnNewLoginPassword");
let theErrorOnConfirmNewPassword = document.getElementById("errorOnConfirmNewLoginPassword");

//checking the new password
function checkingNewPassword() {

    if (theRetrievePasswordForm.newLoginPassword.value === null || theRetrievePasswordForm.newLoginPassword.value === "") {

        theRetrievePasswordForm.newLoginPassword.style.borderColor = "red";
        theErrorOnNewPassword.innerHTML = "Password is required";

    } else if (theRetrievePasswordForm.newLoginPassword.value.length < 6) {

        theRetrievePasswordForm.newLoginPassword.style.borderColor = "red";
        theErrorOnNewPassword.innerHTML = "Password must be at least 6";

    } else {

        theRetrievePasswordForm.newLoginPassword.style.borderColor = "green";
        theErrorOnNewPassword.innerHTML = "";

    }

}
theRetrievePasswordForm.newLoginPassword.addEventListener("blur", checkingNewPassword, false);




//checking the confirm new password
function checkConfirmNewPassword() {

    if (theRetrievePasswordForm.confirmNewLoginPassword.value === null || theRetrievePasswordForm.confirmNewLoginPassword.value === "") {

        theRetrievePasswordForm.confirmNewLoginPassword.style.borderColor = "red";
        errorOnConfirmNewLoginPassword.innerHTML = "Password is required";

    } else if (theRetrievePasswordForm.confirmNewLoginPassword.value.length < 6) {

        theRetrievePasswordForm.confirmNewLoginPassword.style.borderColor = "red";
        errorOnConfirmNewLoginPassword.innerHTML = "Password must be at least 6";

    } else if (theRetrievePasswordForm.confirmNewLoginPassword.value != theRetrievePasswordForm.newLoginPassword.value) {

        theRetrievePasswordForm.confirmNewLoginPassword.style.borderColor = "red";
        errorOnConfirmNewLoginPassword.innerHTML = "Password does not match";

    } else {

        theRetrievePasswordForm.confirmNewLoginPassword.style.borderColor = "green";
        errorOnConfirmNewLoginPassword.innerHTML = "";

    }

}
theRetrievePasswordForm.confirmNewLoginPassword.addEventListener("blur", checkConfirmNewPassword, false);