<?php
session_start();
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sname = $_POST['sname'];
    $iDs = $_POST['iDs'];

    // Query to validate the student
    $stmt = $conn->prepare("SELECT * FROM students WHERE id = ? AND name = ?");
    $stmt->bind_param("ss", $iDs, $sname);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['sname'] = $sname;
        header('Location: homepage.php');
    } else {
        echo 'Invalid ID or Name';
    }

    $stmt->close();
    $conn->close();
}
?>
