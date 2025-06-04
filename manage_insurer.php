<?php include('templates/header.php'); ?>
<form action="actions/manage_insurer_action.php" method="POST" enctype="multipart/form-data">
    <h2>Add Insurer</h2>
    <input type="text" name="insurer_name" placeholder="Insurer Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="text" name="user_type" placeholder="User Type">
    <input type="text" name="user_name" placeholder="User Name">
    <input type="text" name="full_name" placeholder="Full Name">
    <select name="gender">
        <option>Male</option><option>Female</option>
    </select>
    <input type="date" name="dob" placeholder="Date of Birth">
    <input type="text" name="contact_no" placeholder="Contact Number">
    <input type="text" name="nid" placeholder="NID Number">
    <textarea name="address" placeholder="Address"></textarea>
    <input type="file" name="image">
    <button type="submit">Add Insurer</button>
</form>
<?php include('templates/footer.php'); ?>
