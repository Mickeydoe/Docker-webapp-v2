<?php
// Retrieve the username from the query parameter
$username = htmlspecialchars($_GET['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $username; ?>!</h1>
        <p>You have successfully logged in.</p>
    <div>

    <div class="view-container">
        <a href="guestlist.php" class="view-link">View Guest List</a>
    </div>
</body>
</html>