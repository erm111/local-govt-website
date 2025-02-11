<?php
// Entry point of the application

// Include configuration and database connection
require_once 'includes/config.php';
require_once 'includes/db.php';

// Include header
include 'includes/header.php';

// Routing logic
$requestUri = $_SERVER['REQUEST_URI'];

if ($requestUri == '/' || $requestUri == '/index.php') {
    // Load the homepage or main content
    include 'pages/home.php'; // Assuming you have a home.php file for the homepage
} elseif (strpos($requestUri, '/blog') === 0) {
    // Load blog related pages
    include 'blog/index.php';
} elseif (strpos($requestUri, '/about') === 0) {
    // Load about page
    include 'pages/about.php';
} elseif (strpos($requestUri, '/contact') === 0) {
    // Load contact page
    include 'pages/contact.php';
} elseif (strpos($requestUri, '/services') === 0) {
    // Load services page
    include 'pages/services.php';
} else {
    // 404 Not Found
    include 'pages/404.php'; // Assuming you have a 404.php file for not found pages
}

// Include footer
include 'includes/footer.php';
?>