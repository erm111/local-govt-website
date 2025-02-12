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
            $stmt = $pdo->prepare("INSERT INTO job_postings (job_title, requirements, location, job_description) 
                                 VALUES (:title, :requirements, :location, :description)");
            $stmt->execute([
                'title' => $_POST['job_title'],
                'requirements' => $_POST['requirements'],
                'location' => $_POST['location'],
                'description' => $_POST['job_description']
            ]);
        } elseif ($_POST['action'] === 'delete' && isset($_POST['job_id'])) {
            $stmt = $pdo->prepare("DELETE FROM job_postings WHERE id = :id");
            $stmt->execute(['id' => $_POST['job_id']]);
        } elseif ($_POST['action'] === 'update' && isset($_POST['job_id'])) {
            $stmt = $pdo->prepare("UPDATE job_postings SET 
                                 job_title = :title, 
                                 requirements = :requirements, 
                                 location = :location, 
                                 job_description = :description 
                                 WHERE id = :id");
            $stmt->execute([
                'title' => $_POST['job_title'],
                'requirements' => $_POST['requirements'],
                'location' => $_POST['location'],
                'description' => $_POST['job_description'],
                'id' => $_POST['job_id']
            ]);
        }
    }
}

// Fetch existing jobs
$stmt = $pdo->query("SELECT * FROM job_postings ORDER BY created_at DESC");
$jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Postings Management</title>
    <link rel="stylesheet" href="../public/css/dashboard.css">
    <style>
        .job-form {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }

        .job-form input,
        .job-form textarea {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .job-form textarea {
            min-height: 150px;
        }

        .job-form button {
            background: #1a472a;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .job-form button:hover {
            background: #143d23;
        }

        .jobs-list {
            margin-top: 2rem;
        }

        .job-item {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }

        .job-item:hover {
            transform: translateY(-5px);
        }

        .job-item h3 {
            color: #1a472a;
            margin-bottom: 1rem;
        }

        .job-actions {
            margin-top: 1rem;
            display: flex;
            gap: 1rem;
        }

        .job-actions button {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .job-actions button[type="submit"] {
            background: #dc3545;
            color: white;
        }

        .job-actions button:last-child {
            background: #1a472a;
            color: white;
        }

        .job-actions button:hover {
            opacity: 0.9;
        }
    </style>
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
                <?php foreach($jobs as $job): ?>
                    <div class="job-item">
                        <h3><?php echo htmlspecialchars($job['job_title']); ?></h3>
                        <p><strong>Location:</strong> <?php echo htmlspecialchars($job['location']); ?></p>
                        <div class="job-actions">
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="job_id" value="<?php echo $job['id']; ?>">
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this job posting?')">Delete</button>
                            </form>
                            <button onclick="editJob(<?php echo htmlspecialchars(json_encode($job)); ?>)">Edit</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script>
    function editJob(job) {
        document.querySelector('input[name="action"]').value = 'update';
        document.querySelector('input[name="job_title"]').value = job.job_title;
        document.querySelector('textarea[name="requirements"]').value = job.requirements;
        document.querySelector('input[name="location"]').value = job.location;
        document.querySelector('textarea[name="job_description"]').value = job.job_description;
        
        // Remove existing job_id if present
        const existingJobId = document.querySelector('input[name="job_id"]');
        if (existingJobId) {
            existingJobId.remove();
        }
        
        // Add hidden job_id field
        const idInput = document.createElement('input');
        idInput.type = 'hidden';
        idInput.name = 'job_id';
        idInput.value = job.id;
        document.querySelector('form').appendChild(idInput);
        
        // Update form title
        document.querySelector('.job-form h2').textContent = 'Edit Job Posting';
        document.querySelector('button[type="submit"]').textContent = 'Update Job';
    }
    </script>
</body>
</html>
