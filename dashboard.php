<?php
session_start();
if (!isset($_SESSION['user_name']) || !isset($_SESSION['role'])) {
    header("Location: index.html");
    exit;
}

$user = htmlspecialchars($_SESSION['full_name']);
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - Vehicle Insurance System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f9;
      margin: 0;
      padding: 0;
    }
    header {
      background: #2c3e50;
      color: white;
      padding: 20px;
      text-align: center;
    }
    .dashboard {
      max-width: 900px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h2 {
      color: #2c3e50;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    li {
      margin: 10px 0;
    }
    a {
      text-decoration: none;
      background: #3498db;
      color: white;
      padding: 10px 16px;
      border-radius: 5px;
    }
    a:hover {
      background: #2980b9;
    }
  </style>
</head>
<body>

<header>
  <h1>Welcome, <?php echo $user; ?>!</h1>
  <p>Role: <?php echo ucfirst($role); ?></p>
</header>

<div class="dashboard">
  <h2>Dashboard</h2>
  <ul>
    <?php if ($role === 'admin') : ?>
      <li><a href="manage_insurer.php">Manage Insurers</a></li>
      <li><a href="user_report.php">View User Reports</a></li>
      <li><a href="claim_view.php">View All Claims</a></li>
    <?php elseif ($role === 'insurer') : ?>
      <li><a href="insurance_form.php">Add Insurance</a></li>
      <li><a href="user_report.php">Submit User Report</a></li>
      <li><a href="claim_view.php">View My Claims</a></li>
    <?php endif; ?>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>

</body>
</html>
