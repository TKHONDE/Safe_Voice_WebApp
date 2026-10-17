<?php
$host = "localhost";
$user = "root";
$pass = "snowden24";
$db   = "safe_voice";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

