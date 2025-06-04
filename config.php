<?php
// Database configuration
define('DB_HOST', 'sql107.infinityfree.com'); // Example: sqlXXX.infinityfree.com
define('DB_USER', 'if0_39155375'); // Example: if0_39155375
define('DB_PASS', 'ukKNfkyvIGjnO7'); // Use your vPanel password
define('DB_NAME', 'if0_39155375_vehicle_insurance_db'); // Example: vehicle_insurance_db

// Create a database connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
