<?php
//database connection file
include 'db_connection.php';

// Home Button
echo '<br><br><a href="index.html#category">
        <button type="button">Home</button>
      </a>';

// Get the tracking code from the form
$code = isset($_GET['code']) ? $_GET['code'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Track Case</title>
    <!-- Link your main CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="track-page">
<div class="track-container">
    <?php
    if (!empty($code)) {
        $sql = "SELECT status FROM reports WHERE code='$code'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<h2>Case Status</h2>";
            echo "<p>Tracking Code: <b>$code</b></p>";
            echo "<p>Status: <b>" . $row['status'] . "</b></p>";
        } else {
            echo "<p class='error'>No case found with this tracking code.</p>";
        }
    } else {
        echo "<p class='error'>Please enter a tracking code.</p>";
    }

    $conn->close();
    ?>
</div>
</body>
</html>
