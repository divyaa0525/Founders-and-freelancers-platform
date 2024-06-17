<?php
$pageTitle = 'Home';
$heading = 'Welcome to the Founders and Freelancers Platform';
$paragraph = 'This is a place where founders can find talented freelancers to bring their projects to life.';
$benefits = array(
    'Easy project matching based on skills',
    'Secure payment methods',
    'Built-in communication tools'
);
include 'templates/header.php';
?>

<!-- CSS Styles -->
<style>
    /* Body styling */
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    /* Header styling */
    header {
        background-color: #a4cede;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }

    /* Main content styling */
    .container {
        width: 80%;
        margin: auto;
        padding: 20px;
    }

    section {
        background-color: #d2a3d4;
        border: 1px solid #ddd;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
    }

    p {
        color: #666;
        line-height: 1.6;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    li {
        padding: 10px 0;
        border-bottom: 1px solid #ddd;
    }

    li:last-child {
        border-bottom: none;
    }
</style>

<!-- PHP Content -->
<section id="introduction" class="container">
    <h2><?= $heading ?></h2>
    <p><?= $paragraph ?></p>
</section>

<section id="benefits" class="container">
    <h2>Benefits</h2>
    <ul>
        <?php foreach ($benefits as $benefit) { ?>
            <li><?= $benefit ?></li>
        <?php } ?>
    </ul>
</section>

<?php include 'templates/footer.php'; ?>
