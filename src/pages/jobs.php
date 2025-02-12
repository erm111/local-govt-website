<?php
require_once('../includes/db.php');
include('../includes/header.php');

// Fetch all jobs
$jobs = mysqli_query($conn, "SELECT *, 
    TIMESTAMPDIFF(MINUTE, created_at, NOW()) as minutes_ago,
    TIMESTAMPDIFF(HOUR, created_at, NOW()) as hours_ago,
    TIMESTAMPDIFF(DAY, created_at, NOW()) as days_ago,
    TIMESTAMPDIFF(WEEK, created_at, NOW()) as weeks_ago,
    TIMESTAMPDIFF(MONTH, created_at, NOW()) as months_ago
    FROM job_postings ORDER BY created_at DESC");
?>

<div class="jobs-container">
    <h1>Available Job Positions</h1>
    <div class="jobs-grid">
        <?php while($job = mysqli_fetch_assoc($jobs)): ?>
            <div class="job-card">
                <h2><?php echo htmlspecialchars($job['job_title']); ?></h2>
                <p class="location"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($job['location']); ?></p>
                <div class="job-description">
                    <?php echo nl2br(htmlspecialchars($job['job_description'])); ?>
                </div>
                <div class="requirements">
                    <h3>Requirements:</h3>
                    <?php echo nl2br(htmlspecialchars($job['requirements'])); ?>
                </div>
                <div class="job-footer">
                    <span class="time-ago">
                        <?php
                        if ($job['minutes_ago'] < 60) {
                            echo $job['minutes_ago'] . ' minutes ago';
                        } elseif ($job['hours_ago'] < 24) {
                            echo $job['hours_ago'] . ' hours ago';
                        } elseif ($job['days_ago'] < 7) {
                            echo $job['days_ago'] . ' days ago';
                        } elseif ($job['weeks_ago'] < 4) {
                            echo $job['weeks_ago'] . ' weeks ago';
                        } else {
                            echo $job['months_ago'] . ' months ago';
                        }
                        ?>
                    </span>
                    <a href="apply.php?job_id=<?php echo $job['id']; ?>" class="apply-btn">Apply Now</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php include('../includes/footer.php'); ?>