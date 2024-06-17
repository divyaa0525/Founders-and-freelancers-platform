<?php
$pageTitle = 'Search & Match';
include 'templates/header.php';

// Simulate fetching projects or freelancers from a database
$results = [
    ["name" => "Project Alpha", "description" => "A web development project.", "skills" => "PHP, JavaScript"],
    ["name" => "Freelancer Bob", "description" => "Experienced web developer.", "skills" => "PHP, CSS"]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = $_POST['query'];
    // Here you would typically perform a search in the database
    // Simulate search results for simplicity
    $results = array_filter($results, function($item) use ($query) {
        return stripos($item['name'], $query) !== false || stripos($item['description'], $query) !== false || stripos($item['skills'], $query) !== false;
    });
}
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
            background-color: #e6a3b1;
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
        form {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .result strong {
            color: #007bff;
        }
        .result p {
            margin: 5px 0;
        }
        .result em {
            color: #666;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2><?php echo $pageTitle; ?></h2>
        <form method="post" action="search.php">
            <label for="query">Search:</label>
            <input type="text" id="query" name="query" required><br>
            <input type="submit" value="Search">
        </form>
        
        <h3>Results:</h3>
        <?php foreach ($results as $result): ?>
            <div class="result">
                <strong><?php echo htmlspecialchars($result['name']); ?>:</strong>
                <p><?php echo htmlspecialchars($result['description']); ?></p>
                <p><em>Skills: <?php echo htmlspecialchars($result['skills']); ?></em></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
