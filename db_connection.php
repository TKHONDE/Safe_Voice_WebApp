<?php
$host = "localhost";
$user = getenv("DB_USER");
$password = getenv("DB_PASS");
$db = "safe_voice";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

