<?php
// about.php - Provides information about the local government body

include_once '../includes/header.php';
?>

<style>
.about-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
}

.about-header {
    text-align: center;
    margin-bottom: 3rem;
}

.about-header h1 {
    color: #1a472a;
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.about-header p {
    color: #666;
    font-size: 1.1rem;
    line-height: 1.6;
    max-width: 800px;
    margin: 0 auto;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.stat-card {
    background: white;
    padding: 1.5rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.stat-card .icon {
    color: #1a472a;
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.stat-card h3 {
    color: #1a472a;
    font-size: 1.2rem;
    margin-bottom: 0.5rem;
}

.stat-card p {
    color: #666;
    font-size: 0.95rem;
    line-height: 1.5;
}

.mission-section {
    background: #f0f9f0;
    padding: 2rem;
    border-radius: 8px;
    margin-bottom: 3rem;
}

.mission-section .icon {
    color: #1a472a;
    font-size: 1.8rem;
    margin-bottom: 1rem;
}

.mission-section h2 {
    color: #1a472a;
    font-size: 1.8rem;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.mission-section p {
    color: #2c4a3e;
    line-height: 1.6;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.info-card {
    background: white;
    padding: 1.5rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.info-card h3 {
    color: #1a472a;
    font-size: 1.5rem;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.info-card p {
    color: #666;
    line-height: 1.6;
}
.info-card ul {
    margin-top: 1rem;
    padding-left: 1.5rem;
}

.info-card li {
    color: #666;
    line-height: 1.6;
    margin-bottom: 0.5rem;
}
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .about-header h1 {
        font-size: 2rem;
    }
}
</style>

<!-- Add Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<section class="about-section">
    <div class="about-header">
        <h1>About Aboh Mbaise LGA</h1>
        <p>A thriving local government area in Imo State, known for its rich cultural heritage, agricultural excellence, and community spirit.</p>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <i class="far fa-clock icon"></i>
            <h3>Established</h3>
            <p>Founded in 1976 as part of Imo State's local government reforms</p>
        </div>

        <div class="stat-card">
            <i class="fas fa-map-marker-alt icon"></i>
            <h3>Location</h3>
            <p>Situated in the heart of Imo State, Nigeria</p>
        </div>

        <div class="stat-card">
            <i class="fas fa-users icon"></i>
            <h3>Population</h3>
            <p>Home to over 200,000 vibrant residents</p>
        </div>

        <div class="stat-card">
            <i class="fas fa-tree icon"></i>
            <h3>Geography</h3>
            <p>Rich in natural resources with lush vegetation</p>
        </div>
    </div>

    <div class="mission-section">
        <h2>
            <i class="fas fa-landmark"></i>
            Our Mission
        </h2>
        <p>To promote sustainable development, preserve our cultural heritage, and ensure the welfare of our citizens through transparent governance, innovative policies, and community engagement.</p>
    </div>

    <div class="info-grid">
    <div class="info-card">
        <h3>
            <i class="fas fa-building"></i>
            Administration
        </h3>
        <p>Led by a democratically elected Chairman and supported by dedicated council members, our administration works tirelessly to serve the people of Aboh Mbaise.</p>
        <ul>
            <li>Transparent governance structure</li>
            <li>Regular community town halls</li>
            <li>Efficient public service delivery</li>
            <li>Active citizen participation</li>
        </ul>
    </div>

    <div class="info-card">
        <h3>
            <i class="fas fa-monument"></i>
            Heritage & Culture
        </h3>
        <p>Aboh Mbaise is renowned for its rich cultural heritage, traditional festivals, and commitment to preserving local customs and values.</p>
        <ul>
            <li>Annual cultural festivals</li>
            <li>Traditional art and crafts</li>
            <li>Historic landmarks</li>
            <li>Educational initiatives</li>
        </ul>
    </div>
</div>
</section>

<?php
include_once '../includes/footer.php';
?>