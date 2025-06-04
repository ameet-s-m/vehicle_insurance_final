<?php include('templates/header.php'); ?>
<form action="actions/user_report_action.php" method="POST">
    <h2>Submit Vehicle Report</h2>
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="phone_no" placeholder="Phone Number">
    <input type="text" name="address" placeholder="Address">
    <input type="text" name="registration_no" placeholder="Registration No">
    <input type="text" name="vehicle_type" placeholder="Vehicle Type">
    <input type="text" name="manufacturer" placeholder="Manufacturer">
    <input type="text" name="model" placeholder="Model">
    <input type="text" name="fuel_type" placeholder="Fuel Type">
    <input type="number" name="year" placeholder="Year">
    <input type="text" name="insurer" placeholder="Insurer">
    <input type="number" name="premium" placeholder="Premium">
    <input type="number" name="idv" placeholder="IDV">
    <input type="number" name="amount" placeholder="Amount">
    <button type="submit">Submit Report</button>
</form>
<?php include('templates/footer.php'); ?>
