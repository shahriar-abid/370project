<?php
// config.php - Database connection

$host = "localhost";
$user = "root";     // default in XAMPP
$pass = "";         // default in XAMPP
$db   = "event_management";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
