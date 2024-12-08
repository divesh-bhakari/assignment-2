<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collecting form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
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
  <title>Registration Success</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
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
</body>
</html>
