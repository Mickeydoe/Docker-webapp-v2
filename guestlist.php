<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    

    <div class="container">
        <h1>Guestlist</h1>
        <?php
        require 'vendor/autoload.php';

        use Aws\DynamoDb\DynamoDbClient;
        use Aws\Exception\AwsException;

        $awsAccessKeyId = getenv('AWS_ACCESS_KEY_ID');
        $awsSecretAccessKey = getenv('AWS_SECRET_ACCESS_KEY');

        // Create a DynamoDB client
        $dynamoDb = new DynamoDbClient([
            'region'      => 'us-east-1',
            'version'     => 'latest',
            'credentials' => [
                'key'    => $awsAccessKeyId,
                'secret' => $awsSecretAccessKey,
            ]
        ]);
 
        // Retrieve items from the DynamoDB table
        $tableName = 'guestbook';

        try {
            $result = $dynamoDb->scan([
                'TableName' => $tableName,
            ]);

            foreach ($result['Items'] as $item) {
                $name = isset($item['Name']['S']) ? $item['Name']['S'] : '';
                $email = isset($item['Email']['S']) ? $item['Email']['S'] : '';
                $country = isset($item['Country']['S']) ? $item['Country']['S'] : '';

                echo '<div class="guest">';
                echo '<p class="name">Name: ' . htmlspecialchars($name) . '</p>';
                echo '<p class="email">Email: ' . htmlspecialchars($email) . '</p>';
                echo '<p class="country">Country: ' . htmlspecialchars($country) . '</p>';
                echo '</div>';
            }
        } catch (AwsException $e) {
            echo '<p>Error retrieving data: ' . $e->getMessage() . '</p>';
        }
        ?>

    <div class="slideshow-container">
        <div class="slide" style="background-image: url('assets/background1.jpg');"></div>
        <div class="slide" style="background-image: url('assets/background2.jpg');"></div>
        <div class="slide" style="background-image: url('assets/background3.jpg');"></div>
    </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
