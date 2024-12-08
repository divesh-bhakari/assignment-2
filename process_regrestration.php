<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data to avoid security issues
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // In a real application, you would save this information to a database.
    // For this example, we will display it back to the user.

    // Display the data
    echo "<h3>Registration Successful!</h3>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    // It's best not to display passwords in production apps. This is for demonstration only.
    echo "<p><strong>Password:</strong> " . $password . "</p>"; 
} else {
    echo "No data received.";
}
?>
