<?php
// Include the database connection file
include 'db_connection.php';

// Get the tracking code from the form
$code = isset($_GET['code']) ? $_GET['code'] : '';

if (!empty($code)) {
    $sql = "SELECT status FROM reports WHERE code='$code'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Case Status</h2>";
        echo "<p>Tracking Code: <b>$code</b></p>";
        echo "<p>Status: <b>" . $row['status'] . "</b></p>";
    } else {
        echo "<p>No case found with this tracking code.</p>";
    }
} else {
    echo "<p>Please enter a tracking code.</p>";
}

$conn->close();
?>
