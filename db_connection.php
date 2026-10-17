<?php
$host = "localhost";
$user = getenv("DB_USER");
$password = getenv("DB_PASS");
$dbs = "safe_voice";

$conn = new mysqli($host, $user, $password, $dbs);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

