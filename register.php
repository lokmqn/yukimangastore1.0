<?php
// Assuming your database connection code is here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    // Form validation
    // Add your validation logic here, for example:
    if (empty($username) || empty($email) || empty($password_1) || empty($password_2)) {
        // Handle empty fields
    } elseif ($password_1 != $password_2) {
        // Handle password mismatch
    } else {
        // Add your database query here to insert the user
        // Example: $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        // Execute the query and handle success/failure accordingly
    }
}
?>
