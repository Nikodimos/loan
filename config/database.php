<?php
// Database configuration
$servername = "localhost";   // Change this if your database server is on a different host
$username = "root";          // Your MySQL username
$password = "";              // Your MySQL password
$database = "awach-loan";       // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set UTF-8 character set to ensure proper encoding
mysqli_set_charset($conn, "utf8");

?>
