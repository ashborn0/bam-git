<?php
$servername = "localhost"; // or your database server
$username = "root";        // your database username
$password = "";            // your database password
$dbname = "crimes_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
