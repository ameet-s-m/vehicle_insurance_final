<?php include('templates/header.php'); ?>
<form action="actions/signup_action.php" method="POST">
    <h2>User Signup</h2>
    
    <input type="text" name="full_name" placeholder="Full Name" required>
    
    <input type="text" name="contact_no" placeholder="Contact Number" required>
    
    <input type="email" name="email" placeholder="Email" required>
    
    <input type="text" name="state" placeholder="State" required>
    
    <input type="text" name="city" placeholder="City" required>
    
    <input type="text" name="pincode" placeholder="Pincode" required>
    
    <textarea name="full_address" placeholder="Full Address" required></textarea>
    
    <input type="text" name="user_id" placeholder="User ID" required>
    
    <input type="password" name="password" placeholder="Password" required>
    
    <select name="account_status" required>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>

    <button type="submit">Create Account</button>
</form>
<?php include('templates/footer.php'); ?>
