<?php

$servername = "localhost";          // Server name remains localhost
$username = "root";                // Update with your database username
$password = "";                   // Update with your database password
$database = "NDAS";              // Update with your database name

// Create connection
$conn = new mysqli($servername, $sname, $iDs, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
