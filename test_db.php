<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = ''; 
$DB_NAME = 'rainwater.db';
$DB_PORT = 3307; // MySQL port

// passing the port number as the 5th parameter 
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>