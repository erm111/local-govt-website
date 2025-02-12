<?php
session_start();
require_once('../includes/db.php');

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: auth.php');
    exit;
}

// Handle job posting
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'create') {
            $job_title = mysqli_real_escape_string($conn, $_POST['job_title']);
            $requirements = mysqli_real_escape_string($conn, $_POST['requirements']);
            $location = mysqli_real_escape_string($conn, $_POST['location']);
            $job_description = mysqli_real_escape_string($conn, $_POST['job_description']);

            $query = "INSERT INTO job_postings (job_title, requirements, location, job_description) 
                     VALUES ('$job_title', '$requirements', '$location', '$job_description')";
            mysqli_query($conn, $query);
        } elseif ($_POST['action'] === 'delete' && isset($_POST['job_id'])) {
            $job_id = mysqli_real_escape_string($conn, $_POST['job_id']);
            mysqli_query($conn, "DELETE FROM job_postings WHERE id = '$job_id'");
        } elseif ($_POST['action'] === 'update' && isset($_POST['job_id'])) {
            $job_id = mysqli_real_escape_string($conn, $_POST['job_id']);
            $job_title = mysqli_real_escape_string($conn, $_POST['job_title']);
            $requirements = mysqli_real_escape_string($conn, $_POST['requirements']);
            $location = mysqli_real_escape_string($conn, $_POST['location']);
            $job_description = mysqli_real_escape_string($conn, $_POST['job_description']);

            $query = "UPDATE job_postings SET 
                     job_title='$job_title', 
                     requirements='$requirements', 
                     location='$location', 
                     job_description='$job_description' 
                     WHERE id='$job_id'";
            mysqli_query($conn, $query);
        }
    }
}

// Fetch existing jobs
$jobs = mysqli_query($conn, "SELECT * FROM job_postings ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Postings Management</title>
    <link rel="stylesheet" href="../public/css/dashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <?php include '../includes/adminsidebar.php'; ?>
        
        <div class="main-content">
            <h1>Job Postings Management</h1>

            <!-- New Job Form -->
            <div class="job-form">
                <h2>Create New Job Posting</h2>
                <form method="POST">
                    <input type="hidden" name="action" value="create">
                    <input type="text" name="job_title" placeholder="Job Title" required>
                    <textarea name="requirements" placeholder="Requirements" required></textarea>
                    <input type="text" name="location" placeholder="Location" required>
                    <textarea name="job_description" placeholder="Job Description" required></textarea>
                    <button type="submit">Post Job</button>
                </form>
            </div>

            <!-- Existing Jobs List -->
            <div class="jobs-list">
                <h2>Existing Job Postings</h2>
                <?php while($job = mysqli_fetch_assoc($jobs)): ?>
                    <div class="job-item">
                        <h3><?php echo htmlspecialchars($job['job_title']); ?></h3>
                        <p><strong>Location:</strong> <?php echo htmlspecialchars($job['location']); ?></p>
                        <div class="job-actions">
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="job_id" value="<?php echo $job['id']; ?>">
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <button onclick="editJob(<?php echo htmlspecialchars(json_encode($job)); ?>)">Edit</button>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <script>
    function editJob(job) {
        // Populate form with job data for editing
        document.querySelector('input[name="action"]').value = 'update';
        document.querySelector('input[name="job_title"]').value = job.job_title;
        document.querySelector('textarea[name="requirements"]').value = job.requirements;
        document.querySelector('input[name="location"]').value = job.location;
        document.querySelector('textarea[name="job_description"]').value = job.job_description;
        
        // Add hidden job_id field
        let idInput = document.createElement('input');
        idInput.type = 'hidden';
        idInput.name = 'job_id';
        idInput.value = job.id;
        document.querySelector('form').appendChild(idInput);
    }
    </script>
</body>
</html>
