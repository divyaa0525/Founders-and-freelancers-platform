<?php
$pageTitle = 'Profile';
include 'templates/header.php';

// Simulate fetching user data from a database
$userData = [
    "username" => "harshini",
    "email" => "harshini@example.com",
    "skills" => "PHP, JavaScript, CSS",
    "bio" => "Experienced web developer."
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process profile update
    $username = $_POST['username'];
    $email = $_POST['email'];
    $skills = $_POST['skills'];
    $bio = $_POST['bio'];
    
    // Here you would typically update the database with the new user data
    
    echo '<p>Profile updated successfully!</p>';
    $userData = compact('username', 'email', 'skills', 'bio');
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
            background-color: #debfe0;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 16px;
        }
        textarea {
            resize: vertical; /* Allow vertical resizing of textarea */
            min-height: 100px; /* Minimum height of textarea */
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        p.success {
            color: green;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Your Profile</h2>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <p class="success">Profile updated successfully!</p>
        <?php endif; ?>
        <form method="post" action="profile.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($userData['username']); ?>" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($userData['email']); ?>" required><br>
            <label for="skills">Skills:</label>
            <input type="text" id="skills" name="skills" value="<?php echo htmlspecialchars($userData['skills']); ?>"><br>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio"><?php echo htmlspecialchars($userData['bio']); ?></textarea><br>
            <input type="submit" value="Update Profile">
        </form>
    </div>
</body>
</html>

<?php include 'templates/footer.php'; ?>
