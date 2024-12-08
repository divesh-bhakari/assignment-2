<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to avoid XSS or SQL Injection
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    // In a real-world application, you'd save the data to a database
    // Here we'll simply display the data for demonstration purposes
    echo "<h3>Registration Successful!</h3>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    // Note: Password should never be displayed, even for testing purposes in real projects!
    echo "<p><strong>Password:</strong> " . $password . "</p>"; 
} else {
    echo "No data received.";
}
?>
