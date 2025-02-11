<!DOCTYPE html>
<html>
<head>
    <style>
.footer {
    background-color: #192f29;
    color: white;
    padding: 2rem 1rem;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    width: 100%;
    box-sizing: border-box;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    padding: 0 1rem;
}

.footer-section h3 {
    color: white;
    font-size: 1.25rem;
    margin-bottom: 1rem;
}

.footer-section p {
    line-height: 1.5;
    margin: 0;
}

.quick-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.quick-links li {
    margin-bottom: 0.75rem;
}

.quick-links a {
    color: #a0aec0;
    text-decoration: none;
    transition: color 0.2s;
}

.quick-links a:hover {
    color: white;
}

/* Removed social-links related styles */

.footer-bottom {
    text-align: center;
    margin-top: 2rem;
    padding-top: 2rem;
    border-top: 1px solid #2d3748;
}

@media (max-width: 768px) {
    .footer-container {
        grid-template-columns: 1fr;
        padding: 0;
    }
    
    .footer-section {
        text-align: center;
    }

    .footer {
        padding: 2rem 1rem;
    }
}

@media (max-width: 480px) {
    .footer {
        padding: 1.5rem 1rem;
    }

    .footer-section h3 {
        font-size: 1.1rem;
    }

    .footer-section p {
        font-size: 0.9rem;
    }
}
    </style>
</head>
<body>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>Aboh Mbaise Local Government's official platform for news, updates, and community information.</p>
        </div>
        
        <div class="footer-section quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="../pages/home.php">Home</a></li>
                <li><a href="../pages/about.php">About</a></li>
                <li><a href="../pages/projects.php">Projects</a></li>
                <li><a href="../pages/contact.php">Contact</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h3>Contact Info</h3>
            <p>Aboh Mbaise Local Government</p>
            <p>Imo State, Nigeria</p>
            <p>Email: info@abohmbaise.gov.ng</p>
            <p>Phone: +234 XXX XXX XXXX</p>
        </div>
    </div>
    
    <div class="footer-bottom">
        <p>© <?php echo date("Y"); ?> Aboh Mbaise Local Government. All rights reserved.</p>
    </div>
</footer>
</body>
</html>