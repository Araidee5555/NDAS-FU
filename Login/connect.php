<?php

$servername = "NDAS";          // Server name remains localhost
$sname = "root";              // Update with your database username
$iDs = "";                   // Update with your database password
$database = "NDASdb";       // Update with your database name

// Create connection
$conn = new mysqli($servername, $sname, $iDs, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
