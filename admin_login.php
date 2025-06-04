<?php
session_start();
include('config/db.php');

$user_name = $_POST['user_name'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin_table WHERE user_name='$user_name' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $_SESSION['admin'] = $user_name;
    echo "Welcome, Admin! <a href='dashboard.php'>Go to Dashboard</a>";
} else {
    echo "Invalid admin credentials. <a href='index.html'>Try again</a>";
}

$conn->close();
?>
