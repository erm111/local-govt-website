<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: auth.php');
    exit;
}

// Check session timeout (30 minutes)
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 1800)) {
    session_unset();
    session_destroy();
    header('Location: auth.php');
    exit;
}

// Update last activity time
$_SESSION['last_activity'] = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Aboh Mbaise LGA</title>
    <link rel="stylesheet" href="../public/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <?php include '../includes/adminsidebar.php'; ?>
        
        <div class="main-content">
            <div class="welcome-header">
                <h1>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?>!</h1>
            </div>

            <div class="dashboard-cards">
                <div class="card">
                    <h2 class="card-title">Total Job Postings</h2>
                    <div class="card-value">12</div>
                </div>

                <div class="card">
                    <h2 class="card-title">Blog Posts</h2>
                    <div class="card-value">25</div>
                </div>

                <div class="card">
                    <h2 class="card-title">Messages</h2>
                    <div class="card-value">8</div>
                </div>

                <div class="card">
                    <h2 class="card-title">Active Users</h2>
                    <div class="card-value">156</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>