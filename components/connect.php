<?php
try {
    // Define database connection parameters
    $db_host = 'localhost';
    $db_name = 'home_db';
    $db_user_name = 'root';
    $db_user_pass = 'S123.456./s';

    // Create a new PDO database connection
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user_name, $db_user_pass);

    // Set PDO error mode to exceptions for better error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Function to create a unique ID
    function create_unique_id() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
} catch (PDOException $e) {
    // Handle database connection error
    // You can customize this error handling to log or display the error message
    die("Database connection failed: " . $e->getMessage());
}
?>