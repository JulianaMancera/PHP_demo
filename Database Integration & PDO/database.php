<?php
// Database configuration
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'root';
$password = '';

// Correct connection string
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database Connected...";

    // You are now connected to the database
} 
    catch (PDOException $e) {
        // If there is an error with the connection, catch it here
        echo "Connection failed: " . $e->getMessage();
    }
?>