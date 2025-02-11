<?php
session_start();

function login($username, $password) {
    // Assuming you have a function to check credentials
    if (check_credentials($username, $password)) {
        $_SESSION['user'] = $username;
        return true;
    }
    return false;
}

function logout() {
    session_destroy();
    header("Location: /login.php");
}

function is_logged_in() {
    return isset($_SESSION['user']);
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        header("Location: /admin/dashboard.php");
    } else {
        $error = "Invalid username or password.";
    }
}
?>