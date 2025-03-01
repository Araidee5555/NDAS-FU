<?php

$servername = "NDAS";          // Server name remains localhost
$username = "sname";          // Update with your database username
$password = "iDs";           // Update with your database password
$database = "NDASdb";       // Update with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
