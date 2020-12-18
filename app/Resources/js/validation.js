function validateEmail() {

    let emailInput = document.getElementById("email");

    let emailForm = document.getElementById("emailForm");

    let validationReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    let validationCoReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[co]+)*$/;

    if (emailInput.value.length == 0) {
        document.getElementById("message").innerHTML = "Email address is required";
        return false;

    } else if (validationCoReg.test(emailInput.value) == true) {
        document.getElementById("message").innerHTML = "We are not accepting subscriptions from Colombia emails";
        return false;

    } else if (validationReg.test(emailInput.value) == false) {
        document.getElementById("message").innerHTML = "Please provide a valid e-mail address";
        return false;

    } else if (!document.forms["emailForm"]["checkbox"].checked) {
        alert("You must accept the terms and conditions !");
        return false;
    }
    view();
    emailForm.submit()
    return true;
}

function view() {

    let emailIsNotRegistered = document.getElementById("emailIsNotRegistered");

    let emailRegistered = document.getElementById("emailRegistered");

    if (emailIsNotRegistered.style.display === "block") {
        emailIsNotRegistered.style.display = "none";
        emailRegistered.style.display = "block";
    } else {
        emailIsNotRegistered.style.display = "block";
        emailRegistered.style.display = "none";
    }
}