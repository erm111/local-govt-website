<?php
// contact.php

include_once '../includes/header.php';
?>

<div class="contact-container">
    <h1>Contact Us</h1>
    <form action="process_contact.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</div>

<?php
include_once '../includes/footer.php';
?>