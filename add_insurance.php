<?php include('templates/header.php'); ?>
<form action="actions/add_insurance.php" method="POST">
    <h2>Add Vehicle Insurance Details</h2>

    <input type="text" name="manufacturer" placeholder="Manufacturer" required>
    <input type="text" name="model" placeholder="Model" required>
    <input type="text" name="fuel_type" placeholder="Fuel Type" required>
    <input type="number" name="year" placeholder="Year" required>
    
    <input type="text" name="claim" placeholder="Claim (Yes/No)" required>
    <input type="text" name="previous_insurer" placeholder="Previous Insurer">
    <input type="text" name="policy_type" placeholder="Policy Type" required>
    <input type="date" name="policy_expiry" placeholder="Policy Expiry Date" required>
    <input type="date" name="from_date" placeholder="Policy From Date" required>

    <input type="text" name="nominee_name" placeholder="Nominee Name" required>
    <input type="text" name="nominee_relation" placeholder="Nominee Relation" required>
    <input type="number" name="nominee_age" placeholder="Nominee Age" required>

    <select name="vehicle_financed" required>
        <option value="">Is Vehicle Financed?</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>

    <input type="text" name="engine_number" placeholder="Engine Number" required>
    <input type="text" name="chassis_number" placeholder="Chassis Number" required>
    <input type="text" name="previous_policy_num" placeholder="Previous Policy Number">
    <input type="date" name="reg_date" placeholder="Registration Date" required>
    <input type="date" name="manufacturing_date" placeholder="Manufacturing Date" required>

    <button type="submit">Add Insurance</button>
</form>
<?php include('templates/footer.php'); ?>
