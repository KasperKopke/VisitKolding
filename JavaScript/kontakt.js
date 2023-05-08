function validate() {
  let form = document.forms["formm"];
  let errorbox = document.querySelector(".error-message");
  let textField = document.querySelector("textarea");

  const errorMessages = [];
  console.log(errorMessages);
  if (form["name"].value == "") {
    errorMessages.push("First Name is Required |");
  }

  if (form["lastname"].value == "") {
    errorMessages.push("Last Name is Required |");
  }

  if (form["message"].value == "") {
    errorMessages.push("Message is Required |");
  }

  if (form["mail"].value == "") {
    errorMessages.push("Mail is Required |");
  } else {
    var emaildotdkvalidering = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[dk]{2,}$/;
    if (!emaildotdkvalidering.test(form["mail"].value)) {
      errorMessages.push(
        "Please enter a valid email address that ends with .dk |"
      );
    }
  }

  if (errorMessages.length != 0) {
    errorbox.classList.add("show");
    errorbox.innerText = errorMessages.toString();
    return false;
  }

  return true;
}
console.log("jeg er linket din idiot");
