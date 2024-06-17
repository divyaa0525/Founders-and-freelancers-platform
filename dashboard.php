<?php
$pageTitle = 'Dashboard';
include 'templates/header.php';

// Simulate a logged-in user
$user = "harshini";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #b0d1d9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #f0f0f0;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #e0e0e0;
        }

        p {
            text-align: center;
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo htmlspecialchars($user); ?></h2>
        <nav>
            <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="search.php">Search & Match</a></li>
                <li><a href="messages.php">Messages</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        <p>This is your user dashboard where you can manage your profile, search for projects or freelancers, and communicate with others.</p>
    </div>
