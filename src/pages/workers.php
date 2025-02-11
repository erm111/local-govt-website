
<!DOCTYPE html>
<html>
<head>
<style>
.workers-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
}

.section-header {
    text-align: center;
    margin-bottom: 3rem;
}

.section-header h1 {
    color: #0f352d;
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.section-header p {
    color: #566573;
    font-size: 1.1rem;
    max-width: 800px;
    margin: 0 auto;
}

.departments-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
    gap: 2rem;
}

.department-card {
    background: white;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    border: 1px solid #e8f5e9;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.department-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.department-icon {
    background: #e8f5e9;
    width: 48px;
    height: 48px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
}

.department-icon i {
    color: #2e7d32;
    font-size: 1.5rem;
}

.department-title {
    color: #0f352d;
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.department-head {
    color: #566573;
    font-size: 1rem;
    margin-bottom: 1rem;
}

.department-description {
    color: #566573;
    font-size: 1rem;
    margin-bottom: 1.5rem;
    line-height: 1.5;
}

.staff-count {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #566573;
    font-size: 0.95rem;
}

.staff-count i {
    color: #2e7d32;
}

@media (max-width: 1024px) {
    .departments-grid {
        grid-template-columns: 1fr;
    }
    
    .department-card {
        margin: 0 auto;
        max-width: 600px;
    }
}

@media (max-width: 640px) {
    .section-header h1 {
        font-size: 2rem;
    }
    
    .department-card {
        padding: 1.5rem;
    }
}
</style>
</head>
<body>
<?php include('../includes/header.php'); ?>
<section class="workers-section">
    <div class="section-header">
        <h1>Our Government Workers</h1>
        <p>Meet the dedicated team serving the people of Aboh Mbaise Local Government Area</p>
    </div>

    <div class="departments-grid">
        <div class="department-card">
            <div class="department-icon">
                <i class="fas fa-building"></i>
            </div>
            <h2 class="department-title">Executive Office</h2>
            <p class="department-head">Hon. John Doe - Local Government Chairman</p>
            <p class="department-description">Oversees the administration and development of Aboh Mbaise LGA</p>
            <div class="staff-count">
                <i class="fas fa-users"></i>
                <span>15 Staff Members</span>
            </div>
        </div>

        <div class="department-card">
            <div class="department-icon">
                <i class="fas fa-calculator"></i>
            </div>
            <h2 class="department-title">Finance & Account</h2>
            <p class="department-head">Mrs. Jane Smith - Head of Finance</p>
            <p class="department-description">Manages financial operations and accounting procedures</p>
            <div class="staff-count">
                <i class="fas fa-users"></i>
                <span>25 Staff Members</span>
            </div>
        </div>

        <div class="department-card">
            <div class="department-icon">
                <i class="fas fa-hard-hat"></i>
            </div>
            <h2 class="department-title">Works & Infrastructure</h2>
            <p class="department-head">Engr. Michael Johnson - Director of Works</p>
            <p class="department-description">Handles infrastructure development and maintenance</p>
            <div class="staff-count">
                <i class="fas fa-users"></i>
                <span>30 Staff Members</span>
            </div>
        </div>

        <div class="department-card">
            <div class="department-icon">
                <i class="fas fa-heartbeat"></i>
            </div>
            <h2 class="department-title">Health & Social Services</h2>
            <p class="department-head">Dr. Sarah Williams - Director of Health Services</p>
            <p class="department-description">Coordinates healthcare and social welfare programs</p>
            <div class="staff-count">
                <i class="fas fa-users"></i>
                <span>45 Staff Members</span>
            </div>
        </div>
    </div>
</section>

<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<?php include('../includes/footer.php'); ?>
</body>
</html>
