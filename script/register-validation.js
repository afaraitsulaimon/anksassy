var regForm = document.forms.registrationForm;
var theErrorOnFirstName = document.getElementById('errorOnFirstName');

//checking if the first name is empty or not



function checkFirstName() {


    if (regForm.userfirstname.value === null || regForm.userfirstname.value === "") {

        regForm.userfirstname.style.borderColor = "red";
        theErrorOnFirstName.innerHTML = "First name is required";


    } else if (regForm.userfirstname.value.length <= 2) {

        regForm.userfirstname.style.borderColor = "red";
        theErrorOnFirstName.innerHTML = "First name must be more than 2 letters";
    } else if (Number(regForm.userfirstname.value)) {

        regForm.userfirstname.style.borderColor = "red";
        theErrorOnFirstName.innerHTML = "First name cannot be number";
    } else {

        regForm.userfirstname.style.borderColor = "green";
        theErrorOnFirstName.innerHTML = "";
    }
}

regForm.userfirstname.addEventListener("blur", checkFirstName, false);




//checking if the last name is empty or not
var theErrorOnLastName = document.getElementById('errorOnLastName');

function checkLastName() {


    if (regForm.userlastname.value === null || regForm.userlastname.value === "") {

        regForm.userlastname.style.borderColor = "red";
        theErrorOnLastName.innerHTML = "Last name is required";


    } else if (regForm.userlastname.value.length <= 2) {

        regForm.userlastname.style.borderColor = "red";
        theErrorOnLastName.innerHTML = "Last name must be more than 2 letters";
    } else if (Number(regForm.userlastname.value)) {

        regForm.userlastname.style.borderColor = "red";
        theErrorOnLastName.innerHTML = "Last name cannot be numbers";
    } else {

        regForm.userlastname.style.borderColor = "green";
        theErrorOnLastName.innerHTML = "";
    }
}

regForm.userlastname.addEventListener("blur", checkLastName, false);





//checking errors in phone input

var theErrorsOnPhoneInput = document.getElementById("errorOnPhone");

function checkPhoneNo() {

    if (regForm.userphone.value === "" || regForm.userphone.value === null) {

        regForm.userphone.style.borderColor = "red";
        theErrorsOnPhoneInput.innerHTML = "Phone number is required";

    } else if (!Number(regForm.userphone.value)) {

        regForm.userphone.style.borderColor = "red";
        theErrorsOnPhoneInput.innerHTML = "Phone number should be digits";

    } else if (regForm.userphone.value.length < 11 || regForm.userphone.value.length > 11) {

        regForm.userphone.style.borderColor = "red";
        theErrorsOnPhoneInput.innerHTML = "Phone number must be 11";

    } else {

        regForm.userphone.style.borderColor = "green";
        theErrorsOnPhoneInput.innerHTML = "";

    }
}

regForm.userphone.addEventListener("blur", checkPhoneNo, false);







//checking for errors in email

var theErrorOnEmail = document.getElementById("errorOnEmail");

function checkEmail() {
    if (regForm.useremail.value === "" || regForm.useremail.value === null) {

        regForm.useremail.style.borderColor = "red";
        theErrorOnEmail.innerHTML = "Email is required";
    } else if (regForm.useremail.value.indexOf('@') > regForm.useremail.value.lastIndexOf('.')) {

        regForm.useremail.style.borderColor = "red";
        theErrorOnEmail.innerHTML = "Enter Email address Correctly";

    } else if (regForm.useremail.value.indexOf('@') === -1) {

        regForm.useremail.style.borderColor = "red";
        theErrorOnEmail.innerHTML = "Invalid Email address";

    } else {

        regForm.useremail.style.borderColor = "green";
        theErrorOnEmail.innerHTML = "";
    }
}

regForm.useremail.addEventListener("blur", checkEmail, false);



//checking user input password

var theErrorOnPassCode = document.getElementById("errorOnPassword");

function checkPassword() {
    if (regForm.userpass.value === "" || regForm.userpass.value === null) {

        regForm.userpass.style.borderColor = "red";
        theErrorOnPassCode.innerHTML = "Password is required";

    } else if (regForm.userpass.value.length < 6) {

        regForm.userpass.style.borderColor = "red";
        theErrorOnPassCode.innerHTML = "Password should be at least 6";

    } else {

        regForm.userpass.style.borderColor = "green";
        theErrorOnPassCode.innerHTML = "";
    }
}

regForm.userpass.addEventListener("blur", checkPassword, false);



//checking user input confirm password

var theErrorOnConfPassCode = document.getElementById("errorOnConPass");

function checkConPassword() {
    if (regForm.passconfirm.value === "" || regForm.passconfirm.value === null) {

        regForm.passconfirm.style.borderColor = "red";
        theErrorOnConfPassCode.innerHTML = "Password is required";

    } else if (regForm.passconfirm.value.length < 6) {

        regForm.passconfirm.style.borderColor = "red";
        theErrorOnConfPassCode.innerHTML = "Password should be at least 6";

    } else if (regForm.passconfirm.value != regForm.userpass.value) {

        regForm.passconfirm.style.borderColor = "red";
        theErrorOnConfPassCode.innerHTML = "Password does not match";

    } else {

        regForm.passconfirm.style.borderColor = "green";
        theErrorOnConfPassCode.innerHTML = "";
    }
}

regForm.passconfirm.addEventListener("blur", checkConPassword, false);