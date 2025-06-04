<?php
session_start();
include('config/db.php');

$user_name = $_POST['user_name'];
$password = $_POST['password'];

$sql = "SELECT * FROM manage_insurer_table WHERE User_name='$user_name' AND Password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $_SESSION['insurer'] = $user_name;
    echo "Welcome, Insurer! <a href='dashboard.php'>Go to Dashboard</a>";
} else {
    echo "Invalid insurer credentials. <a href='index.html'>Try again</a>";
}

$conn->close();
?>
