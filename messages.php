<?php
$pageTitle = 'Messages';
include 'templates/header.php';

// Simulate fetching messages from a database
$messages = [
    ["from" => "harshini", "message" => "Hi, I'm interested in your project!"],
    ["from" => "hari", "message" => "Can we discuss the project details?"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b1f2d7;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        .message {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .message strong {
            color: #007bff;
        }
        .message p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
   
    <div class="container">
        <h2><?php echo $pageTitle; ?></h2>
        <?php foreach ($messages as $message): ?>
            <div class="message">
                <strong><?php echo htmlspecialchars($message['from']); ?>:</strong>
                <p><?php echo htmlspecialchars($message['message']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

<?php include 'templates/footer.php'; ?>
