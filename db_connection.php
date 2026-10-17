<?php
$host = "localhost";   // XAMPP default
$user = "root";        // default MariaDB user
$pass = "snowden24";            // default password (empty unless you set one)
$db   = "safe_voice";   // must match the database you created

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

