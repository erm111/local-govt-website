<?php
// This file serves as a template for displaying static pages.

// Include the header
include_once '../includes/header.php';

// Page content goes here
?>

<div class="container">
    <h1><?php echo $pageTitle; ?></h1>
    <p><?php echo $pageContent; ?></p>
</div>

<?php
// Include the footer
include_once '../includes/footer.php';
?>