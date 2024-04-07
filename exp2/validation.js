function validateForm() {
  // First Name validation
  let firstName = document.getElementById("firstName").value;
  let firstNamePattern = /^[a-zA-Z]{2,}$/;
  if (!firstNamePattern.test(firstName)) {
    alert(
      "First Name should contain alphabets and be at least 2 characters long."
    );
    return false;
  }

  // Password validation
  let password = document.getElementById("password").value;
  if (password.length < 6) {
    alert("Password should be at least 6 characters long.");
    return false;
  }

  // Email validation
  let email = document.getElementById("email").value;
  let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  // Mobile Number validation
  let mobileNumber = document.getElementById("mobileNumber").value;
  let mobileNumberPattern = /^\d{10}$/;
  if (!mobileNumberPattern.test(mobileNumber)) {
    alert("Mobile number should be 10 digits long.");
    return false;
  }

  // Last Name validation
  let lastName = document.getElementById("lastName").value;
  if (lastName.trim() === "") {
    alert("Last Name cannot be empty.");
    return false;
  }

  // Address validation
  let address = document.getElementById("address").value;
  if (address.trim() === "") {
    alert("Address cannot be empty.");
    return false;
  }

  alert("Registration Successfull");
  return true;
}
