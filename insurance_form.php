<?php include('templates/header.php'); ?>
<form action="actions/insurance_form_action.php" method="POST">
    <h2>Vehicle Insurance Form</h2>
    <input type="text" name="manufacturer" placeholder="Manufacturer" required>
    <input type="text" name="model" placeholder="Model" required>
    <input type="text" name="fuel_type" placeholder="Fuel Type" required>
    <input type="number" name="year" placeholder="Year" required>
    <input type="text" name="claim" placeholder="Claim History">
    <input type="text" name="previous_insurer" placeholder="Previous Insurer">
    <input type="text" name="policy_type" placeholder="Policy Type">
    <input type="date" name="policy_expiry" placeholder="Policy Expiry Date">
    <input type="date" name="from_date" placeholder="From Date">
    <input type="text" name="nominee_name" placeholder="Nominee Name">
    <input type="text" name="nominee_relation" placeholder="Nominee Relation">
    <input type="number" name="nominee_age" placeholder="Nominee Age">
    <input type="text" name="vehicle_financed" placeholder="Vehicle Financed (Yes/No)">
    <input type="text" name="engine_number" placeholder="Engine Number">
    <input type="text" name="chassis_number" placeholder="Chassis Number">
    <input type="text" name="previous_policy_num" placeholder="Previous Policy Number">
    <input type="date" name="reg_date" placeholder="Registration Date">
    <input type="date" name="manufacturing_date" placeholder="Manufacturing Date">
    <button type="submit">Submit Insurance</button>
</form>
<?php include('templates/footer.php'); ?>
