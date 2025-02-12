<?php
include_once '../includes/header.php';
?>

<style>
    .projects-container {
        background-color: #f8f9fa;
        padding: 2rem 0;
    }
    
    .project-card {
        height: 100%;
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        margin-bottom: 2rem;
        overflow: hidden;
        transition: all 0.4s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    }
    
    .project-image {
        height: 250px;
        width: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }
    
    .project-card:hover .project-image {
        transform: scale(1.05);
    }
    
    .project-content {
        padding: 2rem;
    }
    
    .project-title {
        color: #1a472a;
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 0.8rem;
        border-bottom: 2px solid #1a472a;
        padding-bottom: 0.5rem;
    }
    
    .project-date {
        color: #4a5568;
        font-size: 1rem;
        margin-bottom: 1.5rem;
        font-weight: 500;
    }
    
    .project-description {
        color: #2d3748;
        line-height: 1.8;
        font-size: 1.1rem;
    }

    .project-description ul {
        margin-top: 1rem;
        padding-left: 1.2rem;
    }

    .project-description li {
        margin-bottom: 0.8rem;
        position: relative;
        padding-left: 1rem;
    }
    .section-description {
        color: #2d3748;
        line-height: 1.8;
        font-size: 1.1rem;
    }

    .section-title {
        text-align: center;
        color: #1a472a;
        font-size: 2.2rem;
        font-weight: 700;
        margin: 3rem 0;
        position: relative;
        padding-bottom: 1rem;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background: #1a472a;
    }

    @media (max-width: 1200px) {
        .project-image {
            height: 220px;
        }
    }

    @media (max-width: 991px) {
        .project-card {
            margin-bottom: 1.5rem;
        }
        .project-title {
            font-size: 1.3rem;
        }
        .project-description {
            font-size: 1rem;
        }
    }

    @media (max-width: 768px) {
        .project-image {
            height: 200px;
        }
        .project-content {
            padding: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .projects-container {
            padding: 1rem 0;
        }
        .project-image {
            height: 180px;
        }
        .section-title {
            font-size: 1.8rem;
            margin: 2rem 0;
        }
        .project-content {
            padding: 1rem;
        }
    }
</style>

<div class="container">
    <h2 class="section-title">Our Projects</h2>
    <p class="section-description">Discover the various development initiatives and projects undertaken by the Aboh Mbaise Local Government </p>

    <div class="projects-container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="project-card">
                    <img src="../public/images/gradingimage.jpg" class="project-image" alt="Road Grading">
                    <div class="project-content">
                        <h3 class="project-title">Road Grading and Maintenance Project</h3>
                        <div class="project-date">December 2024 - December 2025</div>
                        <div class="project-description">
                            A comprehensive road grading and maintenance initiative aimed at improving transportation 
                            infrastructure in Aboh Mbaise. This project covers major routes and community roads, 
                            ensuring better accessibility and promoting economic activities.
                            <ul>
                                <li>Surface grading of existing roads</li>
                                <li>Drainage system improvements</li>
                                <li>Installation of road signs</li>
                                <li>Community access enhancement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="project-card">
                    <img src="../public/images/roofing.jpg" class="project-image" alt="Secretariat Roofing">
                    <div class="project-content">
                        <h3 class="project-title">Ultra Modern Secretariat Complex Roofing</h3>
                        <div class="project-date">Ongoing Project</div>
                        <div class="project-description">
                            Under the supervision of Mrs. Agatha Uchechukwu Agukwe, Director of Administration 
                            and General Services (DAGS), the abandoned secretariat complex is being revitalized.
                            <ul>
                                <li>Structural beam installation</li>
                                <li>Surface levelling works</li>
                                <li>Modern roofing system installation</li>
                                <li>Interior finishing preparations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="project-card">
                    <img src="../public/images/environment.jpg" class="project-image" alt="Environmental Protection">
                    <div class="project-content">
                        <h3 class="project-title">Environmental Protection Initiative</h3>
                        <div class="project-date">Ongoing Project</div>
                        <div class="project-description">
                            A comprehensive environmental protection program focusing on preserving Aboh Mbaise's 
                            natural resources and promoting sustainable practices.
                            <ul>
                                <li>Waste management systems</li>
                                <li>Tree planting campaigns</li>
                                <li>Environmental awareness programs</li>
                                <li>Clean water initiatives</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once '../includes/footer.php';
?>
