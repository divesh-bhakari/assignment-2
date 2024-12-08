$(document).ready(function() {
  // Form validation with jQuery
  $("#registrationForm").submit(function(event) {
    var isValid = true;

    // Check if all fields are filled
    $('input, select, textarea').each(function() {
      if ($(this).val() === "") {
        isValid = false;
        alert("Please fill out all fields.");
        return false;
      }
    });

    // Check if password and confirm password match
    var password = $("#password").val();
    var confirmPassword = $("#confirm_password").val();
    if (password !== confirmPassword) {
      isValid = false;
      alert("Passwords do not match.");
    }

    // Check if age is valid (18 or older)
    var age = $("#age").val();
    if (age < 18) {
      isValid = false;
      alert("You must be 18 years or older.");
    }

    // Prevent form submission if validation fails
    if (!isValid) {
      event.preventDefault();
    }
  });
});
