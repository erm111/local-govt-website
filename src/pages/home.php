<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aboh Mbaise Local Government</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../public/css/home.css">
</head>
<body>
    <?php include('../includes/header.php'); ?>

    <main>
        <div class="container">
            <section class="welcome">
                <h2>Welcome to Aboh Mbaise Local Government Area</h2>
                <p>We are dedicated to serving our community and improving the lives of our citizens with dedication and transparency.</p>
            </section>
            
            <section class="about-section">
                <div class="about-content">
                    <h3>About Aboh Mbaise</h3>
                    <p>Aboh Mbaise is a Local Government Area of Imo State, Nigeria. Its headquarters is in the town of Aboh. 
                    It has an area of 184 km² and a population of 194,779 at the 2006 census. Our local government is committed 
                    to fostering development, unity, and progress among our communities.</p>
                    <a href="contact.php" class="contact-btn">Get in Touch</a>
                </div>
                <div class="about-image">
                    <figure>
                        <img src="../public/images/hqimage.jpg" alt="Aboh Mbaise Local Government Headquarters">
                        <figcaption>Aboh Mbaise Local Government Headquarters Building</figcaption>
                    </figure>
                </div>
            </section>
            
            <section class="highlights">
                <h3>Latest Updates</h3>
                <div class="grid">
                    <div class="card" data-href="projects.php">
                        <h4>Community Projects</h4>
                        <p>Stay updated with local projects.</p>
                    </div>
                    <div class="card" data-href="jobs.php">
                        <h4>Job Openings</h4>
                        <p>Apply for various job openings and contracts</p>
                    </div>
                    <div class="card" data-href="workers.php">
                        <h4>Administrative Staff</h4>
                        <p>Meet our Dedicated Public servants</p>
                    </div>
                    <div class="card" data-href="blog.php">
                        <h4>News & Announcements</h4>
                        <p>Get the latest news and important announcements.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include('../includes/footer.php'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.addEventListener('click', function() {
                    const href = this.getAttribute('data-href');
                    if (href) {
                        window.location.href = href;
                    }
                });
            });
        });
    </script>
</body>
</html>
