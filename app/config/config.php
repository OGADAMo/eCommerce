<?php
// Database credentials
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "ecommerce"; // Change this to your MySQL database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the connection is successful, you can perform database operations here

// Close the connection when you're done
$conn->close();
?>
