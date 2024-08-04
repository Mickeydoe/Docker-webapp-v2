<?php
// Retrieve the username from the query parameter and sanitize it
$username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : 'Guest';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Retrieval Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="welcome-message">
            <h1>Welcome, <?php echo $username; ?>!</h1>
            <p>Access and manage your data seamlessly with our portal.</p>
        </div>

        <div class="slideshow-container">
        <div class="slide" style="background-image: url('assets/background1.jpg');"></div>
        <div class="slide" style="background-image: url('assets/background2.jpg');"></div>
        <div class="slide" style="background-image: url('assets/background3.jpg');"></div>
        </div>

        
        <div class="profile-info">
            <h2>User Information</h2>
            <p><strong>Username:</strong> <?php echo $username; ?></p>
            <p><strong>Last Login:</strong> <?php echo date("Y-m-d H:i:s"); ?></p>
        </div>
        
        <div class="view-container">
            <a href="guestlist.php" class="view-link">View Guest List</a>
        </div>
        
        <div class="extra-content">
            <h2>Data Management Features</h2>
            <p>Our portal offers a comprehensive set of features to help you manage and retrieve your data efficiently:</p>
            <ul>
                <li>Search and filter data with advanced options.</li>
                <li>Download reports in various formats.</li>
                <li>Securely update your personal information.</li>
            </ul>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
