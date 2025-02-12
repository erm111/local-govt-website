<div class="sidebar">
    <div class="logo-container">
        <img src="../public/images/imo-state-logo.jpg" alt="Imo State Logo" class="sidebar-logo">
    </div>
    <nav class="sidebar-nav">
        <a href="dashboard.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) === 'dashboard.php' ? 'active' : ''; ?>">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="jobposting.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) === 'jobposting.php' ? 'active' : ''; ?>">
            <i class="fas fa-briefcase"></i> Jobs Posting
        </a>
        <a href="blog.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) === 'blog.php' ? 'active' : ''; ?>">
            <i class="fas fa-blog"></i> Blog
        </a>
        <a href="communications.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) === 'communications.php' ? 'active' : ''; ?>">
            <i class="fas fa-comments"></i> Communications
        </a>
        <a href="settings.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) === 'settings.php' ? 'active' : ''; ?>">
            <i class="fas fa-cog"></i> Settings
        </a>
    </nav>
</div>
