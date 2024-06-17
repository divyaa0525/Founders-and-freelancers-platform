<?php
$pageTitle = 'Sign Up';
include 'templates/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle signup (e.g., save to database)
    // For simplicity, we assume signup is successful
    header("Location: dashboard.php");
    exit();
}
?>

<!-- CSS Styles -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 50%;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        margin-top: 50px;
        border-radius: 8px;
    }

    h2 {
        text-align: center;
        color: pink;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<div class="container">
    <h2>Sign Up</h2>
    <form method="post" action="signup.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Sign Up">
    </form>
</div>

<?php include 'templates/footer.php'; ?>
