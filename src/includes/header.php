<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Government Website</title>
    <link rel="icon" type="image/jpg" href="../public/images/coa_logo.jpg">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <?php
    function isActive($page) {
        $currentFile = basename($_SERVER['PHP_SELF']);
        return ($currentFile == $page) ? 'active' : '';
    }
    ?>
    <header class="main-header">
        <div class="logo-container">
            <img src="../public/images/coa_logo.jpg" alt="Aboh Mbaise Logo" class="logo">
            <h1 class="site-title">Aboh Mbaise LGA</h1>
        </div>
        <button class="hamburger" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="main-nav">
            <ul class="nav-list">
                <li><a href="../pages/Home.php" class="<?php echo isActive('Home.php'); ?>">Home</a></li>
                <li><a href="../pages/about.php" class="<?php echo isActive('about.php'); ?>">About Us</a></li>
                <li><a href="../pages/workers.php" class="<?php echo isActive('workers.php'); ?>">Workers</a></li>
                <li><a href="../pages/jobs.php" class="<?php echo isActive('jobs.php'); ?>">Jobs</a></li>
                <li><a href="../pages/projects.php" class="<?php echo isActive('projects.php'); ?>">Projects</a></li>
                <li><a href="../pages/contact.php" class="<?php echo isActive('contact.php'); ?>">Contact</a></li>
                <li><a href="blog/index.php" class="<?php echo isActive('index.php'); ?>">Blog</a></li>
            </ul>
        </nav>
    </header>
    <script>
        const hamburger = document.querySelector('.hamburger');
        const mainNav = document.querySelector('.main-nav');
        
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            mainNav.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!hamburger.contains(e.target) && !mainNav.contains(e.target)) {
                hamburger.classList.remove('active');
                mainNav.classList.remove('active');
            }
        });

        // Close menu when window is resized above mobile breakpoint
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                hamburger.classList.remove('active');
                mainNav.classList.remove('active');
            }
        });
    </script>
</body>
</html>