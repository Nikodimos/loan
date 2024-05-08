<?php

// Include database configuration
require_once './config/database.php';

// Function to create tables
function createTables($conn) {
    // SQL statement to create tables
    $sql = "
//    Your SQL Script here
    ";

    // Execute SQL query
    if ($conn->multi_query($sql) === TRUE) {
        echo "Tables created successfully";
    } else {
        echo "Error creating tables: " . $conn->error;
    }
}

// Function to initialize default values
function initializeDefaults($conn) {
    // You can insert default data into tables here if needed
}

// Create tables
createTables($conn);

// Initialize default values
initializeDefaults($conn);

// Close connection
$conn->close();

?>
