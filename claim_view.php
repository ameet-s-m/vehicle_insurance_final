<?php include('templates/header.php'); include('config/db.php'); ?>
<h2>Submitted Insurance Claims</h2>
<table border="1">
<tr><th>Manufacturer</th><th>Model</th><th>Year</th><th>Claim</th><th>Policy Type</th></tr>
<?php
$sql = "SELECT * FROM team_table";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['Manufacturer']}</td><td>{$row['Model']}</td><td>{$row['year']}</td><td>{$row['claim']}</td><td>{$row['policy_type']}</td></tr>";
}
?>
</table>
<?php include('templates/footer.php'); ?>
