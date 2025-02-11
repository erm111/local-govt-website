<?php
// dashboard.php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: auth.php');
    exit;
}

// Include necessary files
include_once '../includes/config.php';
include_once '../includes/db.php';
include_once '../includes/functions.php';

// Fetch site statistics (dummy data for example)
$totalPosts = getTotalPosts(); // Function to get total blog posts
$totalUsers = getTotalUsers(); // Function to get total registered users

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <?php include_once '../includes/header.php'; ?>

    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="stats">
            <div class="stat">
                <h2>Total Blog Posts</h2>
                <p><?php echo $totalPosts; ?></p>
            </div>
            <div class="stat">
                <h2>Total Users</h2>
                <p><?php echo $totalUsers; ?></p>
            </div>
        </div>
        <div class="quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="blog/manage.php">Manage Blog Posts</a></li>
                <li><a href="auth.php">User Authentication</a></li>
                <li><a href="../index.php">View Site</a></li>
            </ul>
        </div>
    </div>

    <?php include_once '../includes/footer.php'; ?>
</body>
</html>