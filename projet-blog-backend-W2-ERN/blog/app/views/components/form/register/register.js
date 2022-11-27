console.log("auth is ready to go");
const usernameInput = document.getElementsByClassName("form_username-input")[0];
const firstNameInput = document.getElementsByClassName(
  "form_first-name-input"
)[0];
const lastNameInput = document.getElementsByClassName(
  "form_last-name-input"
)[0];
const emailInput = document.getElementsByClassName("form_email-input")[0];
const passwordInput = document.getElementsByClassName("form_password-input")[0];
const passwordConfirmInput = document.getElementsByClassName(
  "form_password-confirm-input"
)[0];
const genderInput = document.getElementsByClassName("form_gender-inputs")[0];
const roleInput = document.getElementsByClassName("form_role-inputs")[0];
const form = document.getElementsByClassName("form_register")[0];

const errorMsg = document.getElementsByClassName("form_error-msg")[0];

// add event listener to the form
// if any input is empty, disable the submit button

form.addEventListener("submit", (e) => {
  e.preventDefault();
  if (
    usernameInput.value === "" ||
    firstNameInput.value === "" ||
    lastNameInput.value === "" ||
    emailInput.value === "" ||
    passwordInput.value === "" ||
    passwordConfirmInput.value === ""
  ) {
    errorMsg.innerHTML = "Please fill out all fields";
  }
  // if the password and password confirm inputs don't match, change the error message
  if (passwordInput.value !== passwordConfirmInput.value) {
    errorMsg.innerHTML = "Passwords don't match";
  }
  // add regex to check if the email is valid
  // if it's not, change the error message
  if (!emailInput.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
    errorMsg.innerHTML = "Please enter a valid email";
  }
  // regex for password
  // if it's not valid, change the error message
  if (
    !passwordInput.value.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/)
  ) {
    errorMsg.innerHTML =
      "Password must contain at least 8 characters, one uppercase letter, one lowercase letter and one number";
  }

  let registerData = new FormData();
  form.append("username", usernameInput.value);
  form.append("firstName", firstNameInput.value);
  form.append("lastName", lastNameInput.value);
  form.append("email", emailInput.value);
  form.append("password", passwordInput.value);
  form.append("gender", genderInput.value);
  form.append("role", roleInput.value);
  fetch("/api/register", {
    method: "POST",
    body: registerData,
  })
    .then((res) => res.json())
    .then((data) => {
      // log http response
      console.log(
        `Response: ${data.status} ${data.statusText} ${data.message}`
      );
    });
});
