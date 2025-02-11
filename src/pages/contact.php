

<!DOCTYPE html>
<html>
<head>
<style>
.contact-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
}

.contact-header {
    text-align: center;
    margin-bottom: 3rem;
}

.contact-header h1 {
    color: #0f352d;
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.contact-header p {
    color: #566573;
    font-size: 1.1rem;
}

.contact-container {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 2rem;
}

.contact-info {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.info-item {
    display: flex;
    align-items: center;
    margin-bottom: 2rem;
}

.info-icon {
    background: #e8f5e9;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
}

.info-icon i {
    color: #2e7d32;
    font-size: 1.25rem;
}

.info-content h3 {
    color: #0f352d;
    font-size: 1.1rem;
    margin-bottom: 0.25rem;
}

.info-content p {
    color: #566573;
    font-size: 1rem;
}

.contact-form {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    color: #0f352d;
    margin-bottom: 0.5rem;
    font-weight: 500;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #dce4e8;
    border-radius: 6px;
    font-size: 1rem;
    transition: border-color 0.2s;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #2e7d32;
}

.form-group textarea {
    min-height: 150px;
    resize: vertical;
}

.submit-button {
    background: #0f352d;
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 6px;
    font-size: 1rem;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.2s;
}

.submit-button:hover {
    background: #1a472a;
}

@media (max-width: 768px) {
    .contact-container {
        grid-template-columns: 1fr;
    }
    
    .contact-header h1 {
        font-size: 2rem;
    }
}
</style>
</head>
<body>
<?php
// contact.php

include_once '../includes/header.php';
?>
<section class="contact-section">
    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>Get in touch with the Aboh Mbaise Local Government Office</p>
    </div>

    <div class="contact-container">
        <div class="contact-info">
            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="info-content">
                    <h3>Our Address</h3>
                    <p>Local Government Headquarters, Aboh Mbaise, Imo State</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info-content">
                    <h3>Phone</h3>
                    <p>+234 XXX XXX XXXX</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info-content">
                    <h3>Email</h3>
                    <p>info@abohmbaise.gov.ng</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="info-content">
                    <h3>Office Hours</h3>
                    <p>Monday - Friday: 8:00 AM - 4:00 PM</p>
                </div>
            </div>
        </div>

        <form class="contact-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Your name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="your@email.com" required>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" placeholder="How can we help?" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" placeholder="Your message" required></textarea>
            </div>

            <button type="submit" class="submit-button">Send Message</button>
        </form>
    </div>
</section>

<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<?php
include_once '../includes/footer.php';
?>
</body>
</html>

