<?php
require_once('../includes/db.php');
include('../includes/header.php');
?>
<!-- Add Font Awesome in the head section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="../public/css/jobs.css">

<?php
// Fetch all jobs with time calculations
$stmt = $pdo->query("SELECT *, 
    TIMESTAMPDIFF(MINUTE, created_at, NOW()) as minutes_ago,
    TIMESTAMPDIFF(HOUR, created_at, NOW()) as hours_ago,
    TIMESTAMPDIFF(DAY, created_at, NOW()) as days_ago,
    TIMESTAMPDIFF(WEEK, created_at, NOW()) as weeks_ago,
    TIMESTAMPDIFF(MONTH, created_at, NOW()) as months_ago
    FROM job_postings ORDER BY created_at DESC");
$jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="jobs-container">
    <h1><i class="fas fa-briefcase"></i> Available Job Positions</h1>
    <div class="jobs-grid">
        <?php foreach($jobs as $job): ?>
            <div class="job-card">
                <div class="job-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h2><?php echo htmlspecialchars($job['job_title']); ?></h2>
                <p class="location"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($job['location']); ?></p>
                <div class="job-description">
                    <i class="fas fa-info-circle"></i>
                    <?php echo nl2br(htmlspecialchars($job['job_description'])); ?>
                </div>
                <div class="requirements">
                    <h3><i class="fas fa-list-check"></i> Requirements:</h3>
                    <?php echo nl2br(htmlspecialchars($job['requirements'])); ?>
                </div>
                <div class="job-footer">
                    <span class="time-ago">
                        <i class="far fa-clock"></i>
                        <?php
                        if ($job['minutes_ago'] < 60) {
                            echo $job['minutes_ago'] . ' minute(s) ago';
                        } elseif ($job['hours_ago'] < 24) {
                            echo $job['hours_ago'] . ' hour(s) ago';
                        } elseif ($job['days_ago'] < 7) {
                            echo $job['days_ago'] . ' day(s) ago';
                        } elseif ($job['weeks_ago'] < 4) {
                            echo $job['weeks_ago'] . ' week(s) ago';
                        } else {
                            echo $job['months_ago'] . ' month(s) ago';
                        }
                        ?>
                    </span>
                    <a href="apply.php?job_id=<?php echo $job['id']; ?>" class="apply-btn">
                        <i class="fas fa-paper-plane"></i> Apply Now
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
