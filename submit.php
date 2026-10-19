<?php
// Include the database connection file
include 'db_connection.php';

// Collect form data safely
$category = isset($_POST['category']) ? $_POST['category'] : '';
$details  = isset($_POST['details']) ? $_POST['details'] : '';

// Generate a unique tracking code
$code = uniqid("SV-");

// Pick a random status (for demo purposes)
$statuses = ["Pending", "In Progress", "Under Review" , "Resolved"];
$status = $statuses[array_rand($statuses)];

// Insert into database
$sql = "INSERT INTO reports (category, details, code, status) 
        VALUES ('$category', '$details', '$code', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Report Submitted Successfully</h2>";
    echo "<p>Your tracking code is: <b>$code</b> Copy & paste it somewhere safe</p>";
    echo "<p>Keep this code safe to check your case progress later.</p>";

    // Track my case button (with precise position of the option on the page)
    echo '<br><br><a href="index.html#tracking">
        <button type="button">Track My Case</button>
      </a>';
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>
