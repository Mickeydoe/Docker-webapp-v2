<?php
// Define hardcoded credentials for simplicity
$valid_username = "user";
$valid_password = "password";

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the form data
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    // Validate the credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Redirect to the welcome page with a query parameter for the username
        header("Location: welcome.php?username=" . urlencode($username));
        exit();
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Invalid request method.";
}
?>
