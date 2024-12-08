<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collecting form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
  $confirm_password = htmlspecialchars($_POST['confirm_password']);
  $dob = htmlspecialchars($_POST['dob']);
  $age = htmlspecialchars($_POST['age']);
  $address = htmlspecialchars($_POST['address']);
  $gender = htmlspecialchars($_POST['gender']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Registration Form</title>
  <style>
    /* General Body Style */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    /* Container for the form */
    .container {
      width: 50%;
      margin: 100px auto;
      background-color: white;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Styling the form elements */
    form label {
      display: block;
      margin: 10px 0 5px;
    }

    form input,
    form select,
    form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    form button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }

    form button:hover {
      background-color: #45a049;
    }

    /* Success Page Style */
    .success-container {
      width: 60%;
      margin: 100px auto;
      background-color: white;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .success-container h2 {
      color: green;
    }

    .success-container p {
      font-size: 18px;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
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
  </script>
</head>
<body>
  <div class="container">
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
      <!-- Success message displaying the data -->
      <div class="success-container">
        <h2>Registration Successful</h2>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Password:</strong> <?php echo $password; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
        <p><strong>Age:</strong> <?php echo $age; ?></p>
        <p><strong>Address:</strong> <?php echo nl2br($address); ?></p>
        <p><strong>Gender:</strong> <?php echo $gender; ?></p>
      </div>
    <?php else: ?>
      <!-- Registration Form -->
      <h2>Registration Form</h2>
      <form id="registrationForm" action="index.php" method="POST">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="">Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>

        <button type="submit">Submit</button>
      </form>
    <?php endif; ?>
  </div>
</body>
</html>
