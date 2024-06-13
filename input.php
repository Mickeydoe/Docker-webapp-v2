<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['message']);

    // Basic validation and response
    if (!empty($name) && !empty($password)) {
        echo "Thank you, " . $name . ". We have received your email address: " . $password . ".";
    } else {
        echo "Please fill out all fields.";
    }
} else {
    echo "Invalid request method.";
}
?>
