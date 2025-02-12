<?php
$host = 'localhost'; // Database host
$dbname = 'abohmbaise'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Display success message
    echo "<div style='color: green; padding: 10px; margin: 10px; background: #e8f5e9; border-radius: 5px;'>
            Database connection established successfully!
          </div>";
          
} catch (PDOException $e) {
    // Handle connection error
    die("Connection failed: " . $e->getMessage());
}
?>
